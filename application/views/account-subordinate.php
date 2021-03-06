<h4>下级账户列表</h4>
<div class="row">
    <div class="col-sm-2">
        <div id="account-tree" class="ztree"></div>
    </div>
    <div class="col-sm-10">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">登录账号</label>

                <div class="col-sm-9">
                    <input type="text" disabled class="form-control" id="" value="ABCD">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">昵称</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="昵称">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">姓名</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="姓名">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">注册时间</label>

                <div class="col-sm-9">
                    <input type="datetime" disabled class="form-control" id="" value="2014-10-01 00:00">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">到期时间</label>

                <div class="col-sm-9">
                    <input type="datetime" readonly class="form-control" id="end-time-input" value="2014-10-01 00:00">

                    <!--                    <div class="input-group date form_datetime"-->
                    <!--                         data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">-->
                    <!--                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>-->
                    <!--                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>-->
                    <!--                        <input class="form-control" size="16" type="datetime" value="2014-10-10 00:00" readonly>-->
                    <!--                    </div>-->
                    <!--                    <input type="hidden" id="dtp_input1" value=""/>-->
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">公司编号</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="公司编号">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">用户地址</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="用户地址">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">手机号码</label>

                <div class="col-sm-9">
                    <input type="number" class="form-control" id="" placeholder="手机号码">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">座机</label>

                <div class="col-sm-9">
                    <input type="number" class="form-control" id="" placeholder="座机">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">QQ</label>

                <div class="col-sm-9">
                    <input type="number" class="form-control" id="" placeholder="QQ">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">邮箱</label>

                <div class="col-sm-9">
                    <input type="email" class="form-control" id="" placeholder="邮箱">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-1 control-label">密码</label>

                <div class="col-sm-9">
                    <input type="password" class="form-control" id="" value="ABCD">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-9">
                    <button type="submit" class="btn btn-default">确定</button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#bindDeviceModal">
                        绑定设备
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#accountDeleteModal">
                        删除账户
                    </button>
                </div>
            </div>
        </form>
    </div>


    <!--    <div class="col-sm-10">-->
    <!--        <div class="form-inline-wrap row">-->
    <!--            <div class="col-sm-10">-->
    <!--                <form class="form-inline" role="form">-->
    <!--                    <div class="form-group">-->
    <!--                        <div class="input-group">-->
    <!--                            <div class="input-group-addon">查找</div>-->
    <!--                            <input class="form-control input-sm" type="text" placeholder="Enter email">-->
    <!--                        </div>-->
    <!--                        <select class="form-control input-sm">-->
    <!--                            <option>全部类型</option>-->
    <!--                            <option>1</option>-->
    <!--                            <option>2</option>-->
    <!--                            <option>3</option>-->
    <!--                            <option>4</option>-->
    <!--                            <option>5</option>-->
    <!--                        </select>-->
    <!--                        <input size="16" type="text" value="2012-06-15 14:45" readonly-->
    <!--                               class="form-control input-sm form_datetime">-->
    <!--                        <button type="submit" class="btn btn-default btn-sm">搜索</button>-->
    <!--                    </div>-->
    <!--                </form>-->
    <!--            </div>-->
    <!--            <div class="col-sm-2">-->
    <!--                <form class="form-inline form-right" role="form">-->
    <!--                    <div class="btn-group">-->
    <!--                        <a href="device/add" class="btn btn-sm btn-default">添加账户</a>-->
    <!--                    </div>-->
    <!---->
    <!--                </form>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="table-responsive">-->
    <!--            <table class="table table-striped table-bordered">-->
    <!--                <tr>-->
    <!--                    <th>使用时间</th>-->
    <!--                    <th>记录新增时间</th>-->
    <!--                    <th>下级名称</th>-->
    <!--                    <th>下级登陆账号</th>-->
    <!--                    <th>密码</th>-->
    <!--                    <th>地址</th>-->
    <!--                    <th>电话</th>-->
    <!--                    <th>QQ</th>-->
    <!--                    <th>邮箱</th>-->
    <!--                    <th>操作</th>-->
    <!--                </tr>-->
    <!--                --><?php
    //                for ($i = 0; $i < 10; ++$i) {
    //
    ?>
    <!--                    <tr>-->
    <!--                        <td>2014-10-01</td>-->
    <!--                        <td>2014-09-01</td>-->
    <!--                        <td>ABC</td>-->
    <!--                        <td>ABC</td>-->
    <!--                        <td>...</td>-->
    <!--                        <td>地址</td>-->
    <!--                        <td>13512345678</td>-->
    <!--                        <td>123456</td>-->
    <!--                        <td>mail@domain.com</td>-->
    <!--                        <td>-->
    <!--                            <a href="#">更多</a>-->
    <!--                            <a href="#" class="account-delete" data-toggle="modal"-->
    <!--                               data-target="#accountDeleteModal">删除</a>-->
    <!---->

    <!--                        </td>-->
    <!--                    </tr>-->
    <!--                --><?php
    //                }
    //
    ?>
    <!--            </table>-->
    <!--        </div>-->
    <!--        <ul class="pagination pagination-sm">-->
    <!--            <li><a href="#"><span class="glyphicon glyphicon-arrow-left"></span></a></li>-->
    <!--            <li><a href="#">1</a></li>-->
    <!--            <li><a href="#">2</a></li>-->
    <!--            <li><a href="#">3</a></li>-->
    <!--            <li><a href="#">4</a></li>-->
    <!--            <li><a href="#">5</a></li>-->
    <!--            <li><a href="#"><span class="glyphicon glyphicon-arrow-right"></span></a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
</div>
<!-- accountDeleteModal -->
<div class="modal fade" id="accountDeleteModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="caps"></div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="mySmallModalLabel">删除账户</h4>
            </div>
            <div class="container">
                <p>你确定要删除这个账户？</p>
                <button type="button" class="btn btn-danger">删除</button>
                <button type="button" class="btn btn-default">取消</button>
            </div>
            <div class="caps"></div>
        </div>
    </div>
</div>
<!-- bindDeviceModal -->
<div class="modal fade" id="bindDeviceModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="caps"></div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="mySmallModalLabel">绑定设备</h4>
            </div>
            <div class="modal-body">

                <table class="table table-striped table-bordered">
                    <tr>
                        <th style="width:32px;"></th>
                        <th>IMEI</th>
                        <th>设备名称</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < 5; ++$i) {
                        ?>
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>0921837</td>
                            <td>AAAAA</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div>
                    <ul class="pagination pagination-sm">
                        <li><a href="#"><span class="glyphicon glyphicon-arrow-left"></span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-arrow-right"></span></a></li>
                    </ul>
                </div>
                <br/>
                <button type="button" class="btn btn-default">确定</button>
                <button type="button" class="btn btn-default">取消</button>
            </div>
            <div class="caps"></div>
        </div>
    </div>
</div>


<script>
    $(function () {

        var setting = {
            async: {
                enable: true,
                url: 'api/subordinateTree',
                autoParam: ['id'],
                otherParam: {sid: Math.random()}
            }
        };
        $.fn.zTree.init($("#account-tree"), setting);

//        var nodes = [
//            {id: 1, pId: 0, name: '管理员', open: true},
//            {id: 2, pId: 1, name: '管理员1', open: true},
//            {id: 3, pId: 1, name: '管理员2', open: true},
//            {id: 4, pId: 2, name: '管理员3', open: true},
//            {id: 5, pId: 2, name: '管理员4', open: true}
//        ];
//
//        var setting = {
//            data: {
//                simpleData: {
//                    enable: true
//                }
//            },
//            callback: {
//                onClick: function () {
//                    console.log('tree node onClick!');
//                    //todo: 点击树节点的回调函数
//                }
//            }
//        };
//
//        $.fn.zTree.init($("#account-tree"), setting, nodes);

        $('#end-time-input').mCalendar({
            date: new Date(),
            callback: function (date, wrap) {
                $('#end-time-input').val($.mCalendarOpts.format.datetime(date));
            },
            clear: function (date, wrap) {
                $('#end-time-input').val('');
            },
            clock: true
        });

//        $(".form_datetime").datetimepicker({
//            showMeridian: true,
//            autoclose: true,
//            todayBtn: true
//        });
    });
</script>