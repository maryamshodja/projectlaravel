@extends('layout.master')
@section('content')
    <section class="content">
        <div class="col-24">

            <div class="row">
                <div class="col-12">
                    @foreach($forms as $form)
                    <ul class="list-unstyled description box">

                            <li>
                                <b>عنوان اگهی :</b>

                                <a><span>{{$form->title}}</span></a>

                            </li>

                            <li>
                                <b>نوع همکاری:</b>

                                <a><span>{{$form->type_cooperation}}</span></a>

                            </li>
                            <li>
                                <b>مکان :</b>

                                <a><span>{{$form->city}}</span></a>

                            </li>
                            <li>
                                <b>ساعت کاری :</b>

                                <a><span>{{$form->time_work}}</span></a>

                            </li>
                            <li>
                                <b>بزرگی سازمان :</b>

                                <a><span>{{$form->size_organization}}</span></a>

                            </li>
                            <li>
                                <b>جنسیت :</b>

                                <a><span>{{$form->gender}}</span></a>

                            </li>
                            <li>
                                <b>معرفی شرکت :</b>

                                <a><span>{{$form->Introduction}}</span></a>

                            </li>
                            <li>
                                <b>دسته بندی :</b>

                                <a><span>{{$form->category}}</span></a>

                            </li>
                            <li>
                                <b>امتیاز آگهی :</b>

                                <a><span>{{$form->score}}</span></a>

                            </li>
                            <li>
                                <b>نقد و بررسی :</b>

                                <a><span>{{$form->check}}</span></a>

                            </li>
                            <li>
                                <b>لینک :</b>

                                <a><span>{{$form->link}}</span></a>

                            </li>

                    </ul>
                    @endforeach

                </div>


            </div>

        </div>
        <!-- /.row -->
    </section>
@endsection
@section('scripts')
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- Superieur Admin for Data Table -->
    <script src="/admin/js/pages/data-table.js"></script>
@endsection
