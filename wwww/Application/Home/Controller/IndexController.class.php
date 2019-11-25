<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('123','utf-8');
    }
	public function dhr(){
		$model=M('news');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);//分配数据	
		$this->display();			//显示数据
		}
	public function news_add(){
		$this->display();
		}
	public function news_add_pass(){
			$title=I('title');
			if(empty($title)){
				$this->error('标题不能为空');
				}
			$data=array(
				'title'=>$title
				);
			$model=M('news');
			if($model->create($data)&&$model->add()){
				$this->success('添加成功',U('dhr'));
				}else{
				$this->error('添加失败',U('news_add'));
					}
		}
	public function news_delete(){
		$id=I('id');
		$model=M('news');
		if($model->where(array('id'=>$id))->delete()){
			$this->success('删除成功',U('dhr'));
			}
		else{
			$this->error('删除失败',U('dhr'));	
				}
		}
	public function news_modify(){
		$id=I('id');
		$model=M('news');
		$data=$model->where(array('id'=>$id))->find();
		$this->assign('data',$data);
		$this->display();
		}
	public function news_modify_pass(){
		$id=I('id');
		$title=I('title');
		$model=M('news');
		$data=array('title'=>$title);
		if($model->where(array('id'=>$id))->save($data)){
			$this->success('修改成功',U('dhr'));
			}
		else{
			$this->error('修改失败',U('dhr'));	
			}
		}
}