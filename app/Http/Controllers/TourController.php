<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTourRequest;
use App\Http\Requests\UpdateTourRequest;
use App\Repositories\TourRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TourController extends AppBaseController
{
    /** @var  TourRepository */
    private $tourRepository;

    public function __construct(TourRepository $tourRepo)
    {
        $this->tourRepository = $tourRepo;
    }

    /**
     * Display a listing of the Tour.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tours = $this->tourRepository->all();

        return view('tours.index')
            ->with('tours', $tours);
    }

    /**
     * Show the form for creating a new Tour.
     *
     * @return Response
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created Tour in storage.
     *
     * @param CreateTourRequest $request
     *
     * @return Response
     */
    public function store(CreateTourRequest $request)
    {
        $input = $request->all();

        $tour = $this->tourRepository->create($input);
        $tour->uploadFile($request["image"],"image");
        $tour->uploadAudio($request);
        Flash::success('Тур успешно сохранен.');

        return redirect(route('tours.index'));
    }

    /**
     * Display the specified Tour.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tour = $this->tourRepository->find($id);

        if (empty($tour)) {
            Flash::error('Тур не найден');

            return redirect(route('tours.index'));
        }

        return view('tours.show')->with('tour', $tour);
    }

    /**
     * Show the form for editing the specified Tour.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tour = $this->tourRepository->find($id);

        if (empty($tour)) {
            Flash::error('Тур не найден');

            return redirect(route('tours.index'));
        }

        return view('tours.edit')->with('tour', $tour);
    }

    /**
     * Update the specified Tour in storage.
     *
     * @param int $id
     * @param UpdateTourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTourRequest $request)
    {
        $tour = $this->tourRepository->find($id);

        if (empty($tour)) {
            Flash::error('Тур не найден');

            return redirect(route('tours.index'));
        }

        $tour = $this->tourRepository->update($request->all(), $id);
        $tour->uploadFile($request["image"],"image");
        $tour->uploadAudio($request);
        Flash::success('Тур успешно обновлен.');

        return redirect(route('tours.index'));
    }

    /**
     * Remove the specified Tour from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tour = $this->tourRepository->find($id);

        if (empty($tour)) {
            Flash::error('Тур не найден');

            return redirect(route('tours.index'));
        }

        $this->tourRepository->delete($id);

        Flash::success('Тур успешно удален.');

        return redirect(route('tours.index'));
    }
}
