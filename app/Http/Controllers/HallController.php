<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHallRequest;
use App\Http\Requests\UpdateHallRequest;
use App\Repositories\HallRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HallController extends AppBaseController
{
    /** @var  HallRepository */
    private $hallRepository;

    public function __construct(HallRepository $hallRepo)
    {
        $this->hallRepository = $hallRepo;
    }

    /**
     * Display a listing of the Hall.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $halls = $this->hallRepository->all();

        return view('halls.index')
            ->with('halls', $halls);
    }

    /**
     * Show the form for creating a new Hall.
     *
     * @return Response
     */
    public function create()
    {
        return view('halls.create');
    }

    /**
     * Store a newly created Hall in storage.
     *
     * @param CreateHallRequest $request
     *
     * @return Response
     */
    public function store(CreateHallRequest $request)
    {
        $input = $request->all();
        $hall = $this->hallRepository->create($input);
        $hall->uploadFile($request["image"],"image");
        $hall->uploadAudio($request);
        Flash::success('Hall saved successfully.');

        return redirect(route('halls.index'));
    }

    /**
     * Display the specified Hall.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hall = $this->hallRepository->find($id);

        if (empty($hall)) {
            Flash::error('Hall not found');

            return redirect(route('halls.index'));
        }

        return view('halls.show')->with('hall', $hall);
    }

    /**
     * Show the form for editing the specified Hall.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hall = $this->hallRepository->find($id);

        if (empty($hall)) {
            Flash::error('Hall not found');

            return redirect(route('halls.index'));
        }

        return view('halls.edit')->with('hall', $hall);
    }

    /**
     * Update the specified Hall in storage.
     *
     * @param int $id
     * @param UpdateHallRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHallRequest $request)
    {
        $hall = $this->hallRepository->find($id);

        if (empty($hall)) {
            Flash::error('Hall not found');

            return redirect(route('halls.index'));
        }

        $hall = $this->hallRepository->update($request->all(), $id);
        $hall->uploadFile($request["image"],"image");
        $hall->uploadAudio($request);
        Flash::success('Hall updated successfully.');

        return redirect(route('halls.index'));
    }

    /**
     * Remove the specified Hall from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hall = $this->hallRepository->find($id);

        if (empty($hall)) {
            Flash::error('Hall not found');

            return redirect(route('halls.index'));
        }

        $this->hallRepository->delete($id);

        Flash::success('Hall deleted successfully.');

        return redirect(route('halls.index'));
    }
}
