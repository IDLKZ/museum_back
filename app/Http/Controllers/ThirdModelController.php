<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThirdModelRequest;
use App\Http\Requests\UpdateThirdModelRequest;
use App\Repositories\ThirdModelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ThirdModelController extends AppBaseController
{
    /** @var  ThirdModelRepository */
    private $thirdModelRepository;

    public function __construct(ThirdModelRepository $thirdModelRepo)
    {
        $this->thirdModelRepository = $thirdModelRepo;
    }

    /**
     * Display a listing of the ThirdModel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $thirdModels = $this->thirdModelRepository->all();

        return view('third_models.index')
            ->with('thirdModels', $thirdModels);
    }

    /**
     * Show the form for creating a new ThirdModel.
     *
     * @return Response
     */
    public function create()
    {
        return view('third_models.create');
    }

    /**
     * Store a newly created ThirdModel in storage.
     *
     * @param CreateThirdModelRequest $request
     *
     * @return Response
     */
    public function store(CreateThirdModelRequest $request)
    {
        $input = $request->all();

        $thirdModel = $this->thirdModelRepository->create($input);
        $thirdModel->uploadFile($request["image"],"image");
        $thirdModel->uploadFile($request["wavefront"],"wavefront");
        $thirdModel->uploadFile($request["texture_image"],"texture_image");
        $thirdModel->uploadFile($request["texture"],"texture");
        $thirdModel->uploadAudio($request);
        Flash::success('3D модель экспоната успешно сохранена.');

        return redirect(route('thirdModels.index'));
    }

    /**
     * Display the specified ThirdModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            Flash::error('3D Модель не найдена');

            return redirect(route('thirdModels.index'));
        }

        return view('third_models.show')->with('thirdModel', $thirdModel);
    }

    /**
     * Show the form for editing the specified ThirdModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            Flash::error('3D Модель не найдена');

            return redirect(route('thirdModels.index'));
        }

        return view('third_models.edit')->with('thirdModel', $thirdModel);
    }

    /**
     * Update the specified ThirdModel in storage.
     *
     * @param int $id
     * @param UpdateThirdModelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateThirdModelRequest $request)
    {
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            Flash::error('3D Модель не найдена');

            return redirect(route('thirdModels.index'));
        }

        $thirdModel = $this->thirdModelRepository->update($request->all(), $id);
        $thirdModel->uploadFile($request["image"],"image");
        $thirdModel->uploadFile($request["wavefront"],"wavefront");
        $thirdModel->uploadFile($request["texture_image"],"texture_image");
        $thirdModel->uploadFile($request["texture"],"texture");
        $thirdModel->uploadAudio($request);
        Flash::success('3D модель успешно обновлена.');

        return redirect(route('thirdModels.index'));
    }

    /**
     * Remove the specified ThirdModel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $thirdModel = $this->thirdModelRepository->find($id);

        if (empty($thirdModel)) {
            Flash::error('3D Модель не найдена');

            return redirect(route('thirdModels.index'));
        }

        $this->thirdModelRepository->delete($id);

        Flash::success('3D Модельь успешно удалена.');

        return redirect(route('thirdModels.index'));
    }
}
