<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
	/*public function pass(){
		$id=I('id');
		$model=M('admin');
		$data=$model->where(array('id'=>$id))->find();
		$this->assign('data',$data);
		$this->display();
		}*/
	/*public function password_pass(){
		$password=I('password');
		$id=I('id');
		$model=M('admin');
		$data=array('password'=>$password);
		if($model->where(array('id'=>$id))->save($data)){
			$this->success('修改成功',U('login'));
			}else{
				$this->error('修改失败',U('pass'));
			}
			}*/
	/*------------------管理员------------------------------*/
	//管理员端的首页
	public function admin_index(){
		$this->display();
	}

/*学生信息增删改查*/

	//管理员页面输出学生信息列表（查询）
	public function admin_info(){
		$this->checkLogin();
		$model=M('stuinfo');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		
		//$sql='select a1.stu_num,a1.stu_name,a1.stu_xy from admin join (select * from stuinfo where stu_name='.session(username).' ) AS a1 on admin.stu_num=a1.stu_num';
		/*$sql='select * from stuinfo where stu_name="'.session('username').'"
		';
		$data=$model->query($sql);*/

		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();			//显示数据
    }	
    //添加学生信息页面
	public function admin_info_add(){
		//$this->checkLogin();	
		
		$this->display();
	}
	
	//把学生信息写入数据库
	public function admin_info_add_pass(){
		//$this->checkLogin();
		$model=M('stuinfo');
		$stu_num=I('stu_num');
		if(empty($stu_num)){
			$this->error('学号不能为空');
			}
		$stu_hobby=implode(',',I('stu_hobby'));
		$data=array(
		'username'=>I('username'),
		'stu_num'=>$stu_num,
		'stu_name'=>I('stu_name'),
		'stu_xy'=>I('stu_xy'),
		'stu_zy'=>I('stu_zy'),
		'stu_class'=>I('stu_class'),
		'stu_gender'=>I('stu_gender'),
		'stu_jg'=>I('stu_jg'),
		'stu_zz'=>I('stu_zz'),
		'stu_home'=>I('stu_home'),
		'stu_iphone'=>I('stu_iphone'),
		'stu_hobby'=>$stu_hobby,
		'stu_study'=>I('stu_study')
		);
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U(/*'index'*/'admin_info'));
			}else{
			$this->error('添加失败',U(/*'index'*/'admin_info'));	
				}
	}
	
	//查询所要修改的学生数据
	public function admin_info_modify(){
		$this->checkLogin();
		$stu_num=I('stu_num');
		$model=M('stuinfo');
		$data=$model->where(array('stu_num'=>$stu_num))->find();
		$this->assign('data',$data);
		$this->display();
	}
	//真正修改学生数据
	public function admin_info_modify_pass(){
		$this->checkLogin();
		$stu_num=I('stu_num');
		$model=M('stuinfo');
		$stu_name=I('stu_name');
		$stu_hobby=implode(',',I('stu_hobby'));
		$data=array(
		'username'=>I('username'),
		'stu_num'=>$stu_num,
		'stu_name'=>$stu_name,
		'stu_xy'=>I('stu_xy'),
		'stu_zy'=>I('stu_zy'),
		'stu_class'=>I('stu_class'),
		'stu_gender'=>I('stu_gender'),
		'stu_jg'=>I('stu_jg'),
		'stu_zz'=>I('stu_zz'),
		'stu_home'=>I('stu_home'),
		'stu_iphone'=>I('stu_iphone'),
		'stu_hobby'=>$stu_hobby,
		'stu_study'=>I('stu_study')
		);
		if($model->where(array('stu_num'=>$stu_num))->save($data)){
			$this->success($stu_name.'学生信息修改成功',U('admin_index'));
			}else{
			$this->error($stu_name.'学生信息修改失败',U('admin_index'));
			}
	}
		//删除学生信息数据
	public function admin_info_delete(){
		$model=M('stuinfo');
		$stu_num=I('stu_num');
		if($model->where(array('stu_num'=>$stu_num))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U(/*'index'*/'admin_info'));
			}else{
			$this->error('删除失败',U(/*'index'*/'admin_info'));
				}
	}
    	
/*END学生信息增删改查*/

/*学生成绩的增删改查*/					
	//成绩页面
	public function admin_score_add(){
		$this->checkLogin();
		$this->display();
	}
	//管理员端显示成绩查询页面
	/*public function admin_score(){
		//$this->loginCheck();
		$model=M('score');
		$data=$model->select();
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}*/
	//显示成绩查询页面
	public function admin_score(){
		//$this->loginCheck();
		$model=M('score');
		$data=$model->select();
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}
	
	//把学生成绩写入数据库
	public function admin_score_add_pass(){
		$this->checkLogin();
		$model=M('score');
		$username=I('username');
		$stu_num=I('stu_num');
		$stu_name=I('stu_name');
		$stu_course=I('stu_course');
		$stu_type=I('stu_type');
		$stu_score=I('stu_score');
		if(empty($username)){
			$this->error('用户名不能为空');
			}
		if(empty($stu_num)){
			$this->error('学号不能为空');
			}
		if(empty($stu_name)){
			$this->error('姓名不能为空');
			}
		if(empty($stu_course)){
			$this->error('课程不能为空');
		}
		if(empty($stu_type)){
			$this->error('类型不能为空');
		}
		if($stu_score<0){
			$this->error('成绩添加错误,成绩不能是负数');
		}else if($stu_score>100){
			$this->error('成绩添加错误,成绩不能大于100');
		}else if($stu_score==''){
			$this->error('成绩不能为空');
		}
		$data=array(
				'username'=>$username,
				'stu_num'=>$stu_num,
				'stu_name'=>$stu_name,
				'stu_course'=>$stu_course,
				'stu_type'=>$stu_type,
				'stu_score'=>$stu_score
			);
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U(/*'index'*/'admin_score'));
			}else{
			$this->error('添加失败',U(/*'index'*/'admin_score_add'));	
				}
	}
	//显示要修改学生成绩的信息（查询）
	public function admin_score_modify(){
		$this->checkLogin();
		$id=I('id');
		$model=M('score');
		$data=$model->where(array('id'=>$id))->find();
		$this->assign('data',$data);
		$this->display();
	}
	//真正修改学生成绩（修改）
	public function admin_score_modify_pass(){
		$this->checkLogin();
		$id=I('id');
		$model=M('score');
		$stu_num=I('stu_num');
		$stu_name=I('stu_name');
		$stu_course=I('stu_course');
		$stu_type=I('stu_type');
		$stu_score=I('stu_score');
		if(empty($stu_num)){
			$this->error('学号不能为空');
			}
		if(empty($stu_name)){
			$this->error('姓名不能为空');
			}
		if(empty($stu_course)){
			$this->error('课程不能为空');
		}
		if(empty($stu_type)){
			$this->error('类型不能为空');
		}
		if($stu_score<0){
			$this->error('成绩添加错误,成绩不能是负数');
		}else if($stu_score>100){
			$this->error('成绩添加错误,成绩不能大于100');
		}
		$data=array(
				'stu_num'=>$stu_num,
				'stu_name'=>$stu_name,
				'stu_course'=>$stu_course,
				'stu_type'=>$stu_type,
				'stu_score'=>$stu_score
			);
		if($model->where(array('id'=>$id))->save($data)){
			$this->success('成绩修改成功',U('admin_index'));
			}else{
			$this->error('成绩修改失败',U('admin_score'));
			}
	}
	//删除学生成绩数据（删除）
	public function admin_score_delete(){
		$model=M('score');
		$id=I('id');
		if($model->where(array('id'=>$id))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U(/*'index'*/'admin_score'));
			}else{
			$this->error('删除失败',U(/*'index'*/'admin_score'));
				}
	}
/*END学生成绩的增删改查*/
/*添加用户*/
	//显示注册页面
	public function admin_username(){
		$this->display();
	}
	///把注册信息添加到数据库中
		public function admin_username_pass(){
			$username=I('username');
			if(empty($username)){
				$this->error('账号不能为空！');
				}
			$password=I('password');
			if(empty($password)){
				$this->error('密码不能为空！');
				}
			$stu_num=I('stu_num');
			if(empty($stu_num)){
				$this->error('学号不能为空！');
				}
			$stu_name=I('stu_name');
			if(empty($stu_name)){
				$this->error('姓名不能为空！');
				}
			$model=M('admin');
			$data=array(
			'username'=>$username,
			'password'=>$password,
			'stu_num'=>$stu_num,
			'stu_name'=>$stu_name
			);
		   if($model->create($data)&&$model->add()){
			   $this->success('注册成功',U('admin_user'));
			   }else{
				   $this->error('注册失败,请重新注册',U('admin_username'));
				   }
			}
/*END添加用户*/
/*查看用户信息*/
	public function admin_username_info(){
		//$this->loginCheck();
		$model=M('admin');
		$data=$model->select();
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}
	//查询所要修改的用户密码
	public function admin_username_modify(){
		$this->checkLogin();
		$stu_num=I('stu_num');
		$model=M('admin');
		$data=$model->where(array('stu_num'=>$stu_num))->find();
		$this->assign('data',$data);
		$this->display();
	}
	//真正修改用户数据
	public function admin_username_modify_pass(){
		$this->checkLogin();
		$model=M('admin');
		$stu_num=I('stu_num');
		$password=I('password');
		if(empty($password)){
				$this->error('请输入密码，密码不能为空');
				}
		$data=array(
			'password'=>$password
		);
		if($model->where(array('stu_num'=>$stu_num))->save($data)){
			$this->success('学号为'.$stu_num.'用户密码修改成功',U('admin_index'));
			}else{
			$this->error('学号为'.$stu_num.'用户密码修改失败',U('admin_index'));
			}
	}
		//删除用户信息数据
	public function admin_username_delete(){
		$model=M('admin');
		$stu_num=I('stu_num');
		if($model->where(array('stu_num'=>$stu_num))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U(/*'index'*/'admin_username_info'));
			}else{
			$this->error('删除失败',U(/*'index'*/'admin_username_info'));
				}
	}
/*END用户信息*/
	/*------------------END管理员------------------------------*/
	
	
		
	//学生端显示选修查询页面
	/*public function publicClass_select(){
		$model=M('publicclass');
		$data=$model->select();
		$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();
	}*/
	//学生选修课写入数据库
	/*public function publicClass_add_pass(){
		$this->checkLogin();
		$model=M('publicclass');
		$stu_num=I('stu_num');
		$stu_name=I('stu_name');
		$stu_course=I('stu_course');
		$stu_type=I('stu_type');
		if(empty($stu_num)){
			$this->error('学号不能为空');
			}
		if(empty($stu_name)){
			$this->error('姓名不能为空');
			}
		if(empty($stu_course)){
			$this->error('课程不能为空');
		}
		if(empty($stu_type)){
			$this->error('类型不能为空');
		}
		$data=array(
				'stu_num'=>$stu_num,
				'stu_name'=>$stu_name,
				'stu_course'=>$stu_course,
				'stu_type'=>$stu_type,
			);
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U(/*'index'*///'publicClass_select'));
		/*	}else{
			$this->error('添加失败',U(/*'index'*///'publicClass_add'));	
				//}
	//}
	/*-------------------学生--------------------------------*/
	//显示首页
	public function index(){
		$this->checkLogin();
		$this->display();
		}
	//学生端显示成绩查询页面
	public function stu_score(){
		//$this->loginCheck();
		$model=M('score');
		//$data=$model->select();
		//$this->assign('data',$data);
		$this->assign('username',session('username'));//分配数据

		//$sql='select * from score where username="'.session('username').'"';
		$sql='select a.stu_num,a.stu_name,a.stu_course,a.stu_type,a.stu_score from admin join (select * from score where username="'.session(username).'" )AS a on admin.stu_num=a.stu_num and admin.username=a.username';
		$data=$model->query($sql);
		
		/*$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		
		$this->assign('page',$show);*/
		$this->assign('data',$data);
		$this->display();
	}
	
	
		//添加学生信息页面
	public function stu_add(){
		//$this->checkLogin();	
		
		$this->display();
	}
	
	//把学生信息写入数据库
	public function stu_add_pass(){
		//$this->checkLogin();
		$model=M('stuinfo');
		$stu_num=I('stu_num');
		if(empty($stu_num)){
			$this->error('学号不能为空');
			}
		$stu_hobby=implode(',',I('stu_hobby'));
		$data=array(
		'username'=>I('username'),
		'stu_num'=>$stu_num,
		'stu_name'=>I('stu_name'),
		'stu_xy'=>I('stu_xy'),
		'stu_zy'=>I('stu_zy'),
		'stu_class'=>I('stu_class'),
		'stu_gender'=>I('stu_gender'),
		'stu_jg'=>I('stu_jg'),
		'stu_zz'=>I('stu_zz'),
		'stu_home'=>I('stu_home'),
		'stu_iphone'=>I('stu_iphone'),
		'stu_hobby'=>$stu_hobby,
		'stu_study'=>I('stu_study')
		);
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U(/*'index'*/'index'));
			}else{
			$this->error('添加失败',U(/*'index'*/'index'));	
				}
	}
	
	 //输出学生信息列表
	
    public function /*index*/info(){
		$this->checkLogin();
		$model=M('stuinfo');			//实例化模型
		//$data=$model->select();		//查询数据
		$this->assign('data',$data);
		$stu_name=I('stu_name');
		$this->assign('username',session('username'));//分配数据
		
		$sql='select a1.stu_num,a1.stu_name,a1.stu_xy,a1.stu_zy,a1.stu_class,a1.stu_gender,a1.stu_jg,a1.stu_zz,a1.stu_home,a1.stu_iphone,a1.stu_hobby,a1.stu_study  from admin join (select * from stuinfo where username="'.session(username).'" ) AS a1 on admin.stu_num=a1.stu_num';
		
		/*$sql='select * from stuinfo where stu_name="'.session('username').'"
		';*/
		$data=$model->query($sql);
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		//$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		$this->display();			//显示数据
    }	
	//查询所要修改的学生数据
	public function stu_modify(){
		$this->checkLogin();
		$stu_num=I('stu_num');
		$model=M('stuinfo');
		$data=$model->where(array('stu_num'=>$stu_num))->find();
		$this->assign('data',$data);
		$this->display();
	}
	//真正修改学生数据
	public function stu_modify_pass(){
		$this->checkLogin();
		$stu_num=I('stu_num');
		$model=M('stuinfo');
		$stu_hobby=implode(',',I('stu_hobby'));
		$data=array(
		'username'=>I('username'),
		'stu_num'=>$stu_num,
		'stu_name'=>I('stu_name'),
		'stu_xy'=>I('stu_xy'),
		'stu_zy'=>I('stu_zy'),
		'stu_class'=>I('stu_class'),
		'stu_gender'=>I('stu_gender'),
		'stu_jg'=>I('stu_jg'),
		'stu_zz'=>I('stu_zz'),
		'stu_home'=>I('stu_home'),
		'stu_iphone'=>I('stu_iphone'),
		'stu_hobby'=>$stu_hobby,
		'stu_study'=>I('stu_study')
		);
		if($model->where(array('stu_num'=>$stu_num))->save($data)){
			$this->success('修改成功',U('index'));
			}else{
			$this->error('修改失败',U('index'));
			}
	}
		//删除学生信息数据
	public function stu_delete(){
		$model=M('stuinfo');
		$stu_num=I('stu_num');
		if($model->where(array('stu_num'=>$stu_num))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U(/*'index'*/'info'));
			}else{
			$this->error('删除失败',U(/*'index'*/'info'));
				}
	}
	/*-------------------END学生--------------------------------*/

	/*------------------留言板------------------------------*/	
	//显示留言页面
	public function liuyan(){
		$this->checkLogin();
		$model=M('liuyanbiao');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);//分配数据
		$this->assign('username',session('username'));
		$this->assign('time',time());
		//分页
		$count=$model->count();
		$Page=new \Think\Page($count,5);
		$show=$Page->show();
		$data=$model->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$data);
		$this->assign('page',$show);
		
		$this->display();
		}
		//留言删除
	public function liuyan_delete(){
		$this->checkLogin();
		$model=M('liuyanbiao');
		$liuyan=I('liuyan');	
		$id=I('id');
		if($model->where(array('id'=>$id))->delete())//$model->delete($stu_num)
		{
			$this->success('删除成功',U('liuyan'));
			}else{
			$this->error('删除失败',U('liuyan'));
				}
		}
	//添加留言数据到数据库中
	public function liuyan_add_pass(){
		$liuyan=I('liuyan');
		$username=I('username');
		$data=array('username'=>session('username'),'liuyan'=>$liuyan,
		'time'=>time());
		$model=M('liuyanbiao');
		if($model->create($data)&&$model->add()){
			$this->success('添加成功',U('Student/liuyan'));
			}else{
				$this->error('添加失败',U('Student/liuyan'));
				}
		}
		//显示留言内容
		/*public function ly(){
			$model=M('admin');			//实例化模型
		$data=$model->select();		//查询数据
		$this->assign('data',$data);//分配数据
		$this->assign('username',session('username'));
		$this->assign('time',time());
			$this->display();
			}*/
	/*------------------END留言板------------------------------*/	

	/*--------------------注册------------------------------*/
	//显示注册页面
	public function register(){
		$this->display();
	}
	///把注册信息添加到数据库中
		public function register_pass(){
			$username=I('username');
			if(empty($username)){
				$this->error('账号不能为空！');
				}
			$password=I('password');
			if(empty($password)){
				$this->error('密码不能为空！');
				}
			$stu_num=I('stu_num');
			if(empty($stu_num)){
				$this->error('学号不能为空！');
				}
			$model=M('admin');
			$data=array(
			'username'=>$username,
			'password'=>$password,
			'stu_num'=>$stu_num
			);
		   if($model->create($data)&&$model->add()){
			   $this->success('注册成功',U('login'));
			   }else{
				   $this->error('注册失败,请重新注册',U('register'));
				   }
			}
	/*--------------------END注册------------------------------*/

	/*--------------------登录------------------------------*/
	//显示登录页面
	public function login(){
		$this->display();
		}
	//登录验证
	public function loginCheck(){
		$username=I('username');
		if(empty($username)){
			$this->error('账号不能为空!');
			}
		$password=I('password');
		if(empty($password)){
			$this->error('密码不能为空！');
			}
		$stu_num=I('stu_num');
		$model=M('admin');
		if($model->where("username='%s' AND password='%s'",$username,$password)->find())
		{		
			session("username",$username);
			session("ischecked",'yes');
			if($username=='admin' and $password=='admin'){
					$this->redirect('Student/admin_index');
				}else{
					$this->redirect('Student/index');
					}
		}
		else{
				$this->error('你输入的账号或密码不正确',U('Student/login'));
				}
		/*if($model->where("username='%s' AND password='%s'",$username,$password)->find()){
			session("username",$username);
			session("ischecked",'yes');
			$this->redirect('Student/index');
			}else{
				$this->error('你输入的账号或密码不正确',U('Student/login'));
				}*/
		}	
	//检测是否登录
	private function checkLogin(){
		if(!session('username')||session('ischecked')!='yes'){
			$this->error('请登录',U('Student/login'));
			}
		}
		//退出登录
		public function logout(){
			if(!session('username')||session('ischecked')!='yes'){
				$this->error('请登录！',U('Student/login'));
				}else{
					session_destroy();
					$this->success('退出成功',U('Student/login'));
					}
			}	
		
	}

?>