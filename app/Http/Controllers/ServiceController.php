<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Repositories\ServiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceController extends AppBaseController
{
    /** @var  ServiceRepository */
    private $serviceRepository;

    public function __construct(ServiceRepository $serviceRepo)
    {
        $this->serviceRepository = $serviceRepo;
    }

    /**
     * Display a listing of the Service.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $services = Service::orderBy("created_at","DESC")->paginate(20);

        return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created Service in storage.
     *
     * @param CreateServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request)
    {
        $input = $request->all();

        $service = $this->serviceRepository->create($input);
        $service->uploadFile($request["image"],"image");
        Flash::success('Услуги успешно сохранены');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified Service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Услуги не найдены');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Услуги не найдены');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('service', $service);
    }

    /**
     * Update the specified Service in storage.
     *
     * @param int $id
     * @param UpdateServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Услуги не найдены');

            return redirect(route('services.index'));
        }

        $service = $this->serviceRepository->update($request->all(), $id);
        $service->uploadFile($request["image"],"image");
        Flash::success('Услуги успешно обновлены');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Услуги не найдены');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Услуга успешно удалена.');

        return redirect(route('services.index'));
    }
}
