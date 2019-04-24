<?php
namespace app\form\controller;

use FormBuilder\Form;

class Index
{
    public function index()
    {
        $form =  	Form::create(Url::build('update',array('id'=>$id)),[
		            Form::input('menu_name','按钮名称',$menu['menu_name']),
		            Form::select('pid','父级id',(string)$menu->getData('pid'))->setOptions(function()use($id){
		                $list = (Util::sortListTier(MenusModel::where('id','<>',$id)->select()->toArray(),'顶级','pid','menu_name'));
		                $menus = [['value'=>0,'label'=>'顶级按钮']];
		                foreach ($list as $menu){
		                    $menus[] = ['value'=>$menu['id'],'label'=>$menu['html'].$menu['menu_name']];
		                }
		                return $menus;
		            })->filterable(1),
		            Form::select('module','模块名',$menu['module'])->options([['label'=>'总后台','value'=>'admin'],['label'=>'总后台1','value'=>'admin1']]),
		            Form::input('controller','控制器名',$menu['controller']),
		            Form::input('action','方法名',$menu['action']),
		            Form::input('params','参数',MenusModel::paramStr($menu['params']))->placeholder('举例:a/123/b/234'),
		            Form::frameInputOne('icon','图标',Url::build('admin/widget.widgets/icon',array('fodder'=>'icon')),$menu['icon'])->icon('ionic'),
		            Form::number('sort','排序',$menu['sort']),
		            Form::radio('is_show','是否菜单',$menu['is_show'])->options([['value'=>0,'label'=>'隐藏'],['value'=>1,'label'=>'显示(菜单只显示三级)']])
		        ]);
		$form->setMethod('post')->setTitle('编辑权限');
		$this->assign(compact('form'));
		return $this->fetch('public/form-builder');
    }
}
