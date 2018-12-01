@extends('admin.layouts.master')
@section('title','Quản lý danh mục')
@section('content')
    <div id="category-idx">
        <div class="row">
            <div class="col-xl-6">

                <!--begin:: Widgets/Sale Reports-->
                <div class="m-portlet m-portlet--full-height " id="category">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Danh mục
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav" id="cate-btn-group">
                                <button type="button" class="btn btn-lg m-btn--pill btn-success mx-2 "
                                        data-toggle="modal" data-target="#modal_add">
                                    Thêm
                                </button>
                                <button type="button" class="btn btn-lg m-btn--pill btn-info mx-2 cate-btn" id="cate-btn-edit" disabled>Sửa</button>
                                <button type="button" class="btn btn-lg m-btn--pill btn-warning mx-2 cate-btn" id="cate-btn-del" disabled>Xoá</button>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-section">
                            <div class="m-section__content">
                                <table class="table m-table table-hover m-table--head-bg-success" id="tb-category">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="cate-check-all">
                                        </th>
                                        <th>STT</th>
                                        <th>Tên danh mục</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr class="cate-items" data-cate-id="{{ $category->id }}">
                                            <td>
                                                <input type="checkbox" class="cate-checkbox">
                                            </td>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $category->name }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">
                                                Không tìm thấy dữ liệu
                                            </td>

                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Begin::Tab Content-->

                        <!--End::Tab Content-->
                    </div>
                </div>

                <!--end:: Widgets/Sale Reports-->
            </div>
            <div class="col-xl-6">

                <!--begin:: Widgets/Product Sales-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height " id="sub-category">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Product Sales
                                    <span class="m-portlet__head-desc">Total Sales By Products</span>
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                        Filter
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-widget25">
                            <span class="m-widget25__price m--font-brand">$237,650</span>
                            <span class="m-widget25__desc">Total Revenue This Month</span>
                            <div class="m-widget25--progress">
                                <div class="m-widget25__progress">
													<span class="m-widget25__progress-number">
														63%
													</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget25__progress-sub">
														Sales Growth
													</span>
                                </div>
                                <div class="m-widget25__progress">
													<span class="m-widget25__progress-number">
														39%
													</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-accent" role="progressbar" style="width: 39%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget25__progress-sub">
														Product Growth
													</span>
                                </div>
                                <div class="m-widget25__progress">
													<span class="m-widget25__progress-number">
														54%
													</span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-warning" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="m-widget25__progress-sub">
														Community Growth
													</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Product Sales-->
            </div>
        </div>
    </div>



    {{--modal--}}
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog"
         aria-labelledby="modal_add_title" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_add_title">Thêm mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('category.store') }}">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên danh mục:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-metal" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-primary" id="btn-save-add">Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script  type="text/javascript">
        (function ($, window, document, undefined) {
            //event click edit
            var clickItemCate = {
                init: function () {
                    $(document).on('click', '#tb-category .cate-items',function(e){
                        e.stopPropagation();
                        // $('.cate-btn').removeAttr('disabled');
                        var id= $(this).data('cate-id');
                        var url = '{{ route('category.show', ':category') }}';
                        url = url.replace(':category', id);
                        $.ajax({
                            method : "GET",
                            url : url,
                            success : function(data){
                                console.log(data);
                            }
                        })

                    });
                }
            };

            //select all checkboxes
            var checkAll = {
                init: function () {
                    //checkall
                    $(document).on('change', '#cate-check-all',function(e){
                        $(".cate-checkbox").prop('checked', $(this).prop("checked"));
                        if($(this).prop("checked") == true){
                            $('#cate-btn-del').removeAttr('disabled');//show btn del
                        }else{
                            $('.cate-btn').attr('disabled','disabled');// disable btn edit, del
                        }
                    });
                    $(document).on('change', '.cate-checkbox',function(e){
                        e.stopPropagation();
                        //uncheck "select all", if one of the listed checkbox item is unchecked
                        if(false == $(this).prop("checked")){ //if this item is unchecked
                            $("#cate-check-all").prop('checked', false); //change "select all" checked status to false
                            $('.cate-btn').attr('disabled','disabled');// disable btn edit, del
                        }
                        if( $('.cate-checkbox:checked').length == 1 ){ // if count items is checked  == 1
                            $('.cate-btn').removeAttr('disabled');//show btn del, edit
                        };
                        //check "select all" if all checkbox items are checked
                        if ($('.cate-checkbox:checked').length == $('.cate-checkbox').length ){
                            $("#cate-check-all").prop('checked', true);
                            $('#cate-btn-del').removeAttr('disabled');
                        }
                    });
                }
            };






            // please modulize your functions so we can reuse/turn on & off easily
            $(document).ready(function () {
                clickItemCate.init();
                checkAll.init();
            });

        })
        (jQuery, window, document);

    </script>
@endsection
