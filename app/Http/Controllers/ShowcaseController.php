<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShowcaseRequest;
use App\Http\Requests\UpdateShowcaseRequest;
use App\Models\Showcase;
use App\Repositories\ShowcaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShowcaseController extends AppBaseController
{
    /** @var  ShowcaseRepository */
    private $showcaseRepository;

    public function __construct(ShowcaseRepository $showcaseRepo)
    {
        $this->showcaseRepository = $showcaseRepo;
    }

    /**
     * Display a listing of the Showcase.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $showcases = Showcase::orderBy("created_at","DESC")->paginate(15);
        return view('showcases.index')
            ->with('showcases', $showcases);
    }

    /**
     * Show the form for creating a new Showcase.
     *
     * @return Response
     */
    public function create()
    {
        return view('showcases.create');
    }

    /**
     * Store a newly created Showcase in storage.
     *
     * @param CreateShowcaseRequest $request
     *
     * @return Response
     */
    public function store(CreateShowcaseRequest $request)
    {
        $input = $request->all();

        $showcase = $this->showcaseRepository->create($input);
        $showcase->uploadFile($request["image"],"image");
        $showcase->uploadAudio($request);

        Flash::success('Showcase saved successfully.');

        return redirect(route('showcases.index'));
    }

    /**
     * Display the specified Showcase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $showcase = $this->showcaseRepository->find($id);

        if (empty($showcase)) {
            Flash::error('Showcase not found');

            return redirect(route('showcases.index'));
        }

        return view('showcases.show')->with('showcase', $showcase);
    }

    /**
     * Show the form for editing the specified Showcase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $showcase = $this->showcaseRepository->find($id);

        if (empty($showcase)) {
            Flash::error('Showcase not found');

            return redirect(route('showcases.index'));
        }

        return view('showcases.edit')->with('showcase', $showcase);
    }

    /**
     * Update the specified Showcase in storage.
     *
     * @param int $id
     * @param UpdateShowcaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShowcaseRequest $request)
    {
        $showcase = $this->showcaseRepository->find($id);

        if (empty($showcase)) {
            Flash::error('Showcase not found');

            return redirect(route('showcases.index'));
        }

        $showcase = $this->showcaseRepository->update($request->all(), $id);
        $showcase->uploadFile($request["image"],"image");
        $showcase->uploadAudio($request);
        Flash::success('Showcase updated successfully.');

        return redirect(route('showcases.index'));
    }

    /**
     * Remove the specified Showcase from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $showcase = $this->showcaseRepository->find($id);

        if (empty($showcase)) {
            Flash::error('Showcase not found');

            return redirect(route('showcases.index'));
        }

        $this->showcaseRepository->delete($id);

        Flash::success('Showcase deleted successfully.');

        return redirect(route('showcases.index'));
    }
}
