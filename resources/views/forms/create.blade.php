
@extends('layout.master');

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">فرم ایجاد آگهی</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('forms.store',$form)}}" method="post" >
                        @csrf

                        <div class="form-group">
                            <label for="title">عنوان آگهی</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>

                        <div>
                            <div class="form-group">
                                <label for="type_cooperation">نوع همکاری</label>
                                <select  class="form-control" name="type_cooperation" id="type_cooperation">
                                    <label for="type_cooperation"></label>

                                    <option value="حضوری - تمام وقت" {{ $form->type_cooperation == 'حضوری - تمام وقت' ? 'selected' : '' }}>حضوری - تمام وقت</option>
                                    <option value="حضوری-پاره وقت" {{ $form->type_cooperation == 'حضوری-پاره وقت' ? 'selected' : '' }}>حضوری-پاره وقت</option>
                                    <option value="غیرحضوری-تمام وقت" {{ $form->type_cooperation == 'غیرحضوری-تمام وقت' ? 'selected' : '' }}>غیرحضوری-تمام وقت</option>
                                    <option value="غیر حضوری-پاره وقت" {{ $form->type_cooperation == 'غیر حضوری-پاره وقت' ? 'selected' : '' }}>غیر حضوری-پاره وقت</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="city">مکان</label>
                                <select  class="form-control" name="city" id="city">
                                    <label for="city"></label>
                                    <option value="تهران" {{ $form->city == 'تهران' ? 'selected' : '' }}>تهران</option>
                                    <option value="کرج" {{ $form->city == 'کرج' ? 'selected' : '' }}>کرج</option>
                                    <option value="مشهد" {{ $form->city == 'مشهد'? 'selected' : '' }}>مشهد</option>
                                    <option value="اصفهان" {{ $form->city == 'اصفهان' ? 'selected' : '' }}>اصفهان</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="time_work">ساعت کاری</label>
                            <input type="text" class="form-control" name="time_work" id="time_work">
                        </div>
                        <div class="form-group">
                            <label for="size_organization">بزرگی سازمان</label>
                            <input type="text" class="form-control" name="size_organization" id="size_organization">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="gender">مکان</label>
                                <select  class="form-control" name="gender" id="gender">
                                    <label for="gender"></label>
                                    <option value="جنسیت مهم نیست" {{ $form->gender == 'جنسیت مهم نیست' ? 'selected' : '' }}>جنسیت مهم نیست</option>
                                    <option value="آقا" {{ $form->gender == 'آقا' ? 'selected' : '' }}>آقا</option>
                                    <option value="خانم" {{ $form->gender == 'خانم' ? 'selected' : '' }}>خانم</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Introduction">معرفی شرکت</label>
                            <input type="text" class="form-control" name="Introduction" id="Introduction">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="category">دسته بندی</label>
                                <select  class="form-control" name="category" id="category">
                                    <label for="category"></label>
                                    <option value="وب-برنامه نویسی ونرم افزار" {{ $form->category == 'وب-برنامه نویسی ونرم افزار' ? 'selected' : '' }}>وب-برنامه نویسی ونرم افزار</option>
                                    <option value="مهندسی کامپیوتر سخت افزار" {{ $form->category == 'مهندسی کامپیوتر سخت افزار' ? 'selected' : '' }}>مهندسی کامپیوتر سخت افزار</option>
                                    <option value="مهندسی معماری" {{ $form->category == 'مهندسی معماری' ? 'selected' : '' }}>مهندسی معماری</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="score">امتیاز آگهی</label>
                                <select  class="form-control" name="score" id="score">
                                    <label for="score"></label>
                                    <option value="1" {{ $form->score == 1 ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $form->score == 2 ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $form->score == 3 ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $form->score == 4 ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $form->score == 5? 'selected' : '' }}>5</option>
                                    <option value="6" {{ $form->score == 6 ? 'selected' : '' }}>6</option>
                                    <option value="7" {{ $form->score == 7 ? 'selected' : '' }}>7</option>
                                    <option value="8" {{ $form->score == 8 ? 'selected' : '' }}>8</option>
                                    <option value="9" {{ $form->score == 9 ? 'selected' : '' }}>9</option>
                                    <option value="10" {{ $form->score == 10 ? 'selected' : '' }}>10</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="check">نقد وبرسی</label>
                            <input type="text" class="form-control" name="check" id="check">
                        </div>
                        <div class="form-group">
                            <label for="link">ارسال رزومه</label>
                            <input type="text" class="form-control" name="link" id="link">
                        </div>



                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

