@extends('layouts.admin')
@section('content')
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
                        <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel 
                        </a>
                    </div>
                {{-- content row --}}
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Type</th>
                                            <th>Departure Date</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @forelse ($items as $item)
                                       <tr>
                                        <th>{{ $item->id }}</th>
                                        <th>{{ $item->title }}</th>
                                        <th>{{ $item->location }}</th>
                                        <th>{{ $item->type }}</th>
                                        <th>{{ $item->departure_date }}</th>
                                        <th>{{ $item->type }}</th>
                                        <th>
                                            {{-- edit --}}
                                            <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>

                                            {{-- delete --}}
                                            <form action="{{ route('travel-package.destroy', $item->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </th>
                                    </tr>
                                       @empty
                                           <tr>
                                            <td colspan="7" class="text-center">
                                                Data tidak ditemukan
                                            </td>
                                           </tr>
                                       @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{-- end of content row --}}
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
@endsection