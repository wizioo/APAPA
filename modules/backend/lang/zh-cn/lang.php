<?php

return [
    'auth' => [
        'title' => '管理区域'
    ],
    'field' => [
        'invalid_type' => '不合法的字段类型 :type.',
        'options_method_not_exists' => "模型 :model 必须定义一个返回 ':field' 表单字段选项的方法 :method()。"
    ],
    'widget' => [
        'not_registered' => "部件 ':name' 还没注册",
        'not_bound' => "部件 ':name' 没绑到控制器"
    ],
    'page' => [
        'untitled' => '未命名',
        'access_denied' => [
            'label' => '访问拒绝',
            'help' => "你没有访问这个页面需要的权限.",
            'cms_link' => '返回后台'
        ]
    ],
    'partial' => [
        'not_found_name' => "部件 ':name' 没找到."
    ],
    'account' => [
        'sign_out' => '登出',
        'login' => '登录',
        'reset' => '重置',
        'restore' => '还原',
        'login_placeholder' => '登录',
        'password_placeholder' => '密码',
        'forgot_password' => '忘记你的密码?',
        'enter_email' => '输入你的email',
        'enter_login' => '输入账号',
        'email_placeholder' => 'email',
        'enter_new_password' => '输入新密码',
        'password_reset' => '密码重置',
        'restore_success' => '密码重置的邮件已发往你的邮箱.',
        'restore_error' => "找不到用户 ':login'",
        'reset_success' => '你的密码已经重置成功. 你现在可以登录了.',
        'reset_error' => '密码重置失败. 请重试!',
        'reset_fail' => '不能重置你的密码!',
        'apply' => '应用',
        'cancel' => '取消',
        'delete' => '删除',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => '仪表盘',
        'widget_label' => '小工具',
        'widget_width' => '宽度',
        'full_width' => '全部宽度',
        'add_widget' => '添加小工具',
        'widget_inspector_title' => '小工具配置',
        'widget_inspector_description' => '配置报表小工具',
        'widget_columns_label' => '宽度 :columns',
        'widget_columns_description' => '小工具宽度, 1 到 10.',
        'widget_columns_error' => '请输入小工具宽度, 1 到 10.',
        'columns' => '{1} 栏|[2,Inf] 栏',
        'widget_new_row_label' => '强制新列',
        'widget_new_row_description' => '把小工具放到新列.',
        'widget_title_label' => '小工具标题',
        'widget_title_error' => '需要小工具标题.',
        'status' => [
            'widget_title_default' => '系统状态',
            'online' => '在线',
            'maintenance' => '维护中',
            'update_available' => '{0} 更新可用!|{1} 更新可用!|[2,Inf] 更新可用!'
        ]
    ],
    'user' => [
        'name' => '管理员',
        'menu_label' => '管理员',
        'menu_description' => '管理后台管理员用户, 组和权限.',
        'list_title' => '管理',
        'new' => '新管理员',
        'login' => '登录',
        'first_name' => '名',
        'last_name' => '姓',
        'full_name' => '全民',
        'email' => '邮件',
        'groups' => '团队',
        'groups_comment' => '指明这个人属于哪个组.',
        'avatar' => '头像',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'permissions' => '权限',
        'account' => '帐号',
        'superuser' => '超级用户',
        'superuser_comment' => '选中并允许这个人访问全部区域.',
        'send_invite' => '发送邀请邮件',
        'send_invite_comment' => '发送一封包含用户名和密码的欢迎邮件',
        'delete_confirm' => '你真的想要删除这个管理员?',
        'return' => '返回管理员列表',
        'allow' => '允许',
        'inherit' => '继承',
        'deny' => '拒绝',
        'group' => [
            'name' => '组',
            'name_field' => '名字',
            'description_field' => '描述',
            'is_new_user_default_field' => '默认增加新管理员到这个组',
            'code_field' => '代码',
            'code_comment' => '如果你想访问 API, 请输入唯一码.',
            'menu_label' => '群组',
            'list_title' => '管理群组',
            'new' => '新管理组',
            'delete_confirm' => '你真的想要删除这个管理组?',
            'return' => '返回组列表',
        ],
        'preferences' => [
            'not_authenticated' => '没有认证用户加载或保存设置.'
        ]
    ],
    'list' => [
        'default_title' => '列表',
        'search_prompt' => '搜索...',
        'no_records' => '当前视图中没有记录.',
        'missing_model' => ':class 中的列表没有定义好的模型。',
        'missing_column' => '没有 :columns 的栏定义.',
        'missing_columns' => ':class 中使用的列表没有定义好的栏.',
        'missing_definition' => "列表不包含 ':field' 栏.",
        'behavior_not_ready' => '列表没有初始化, 确认你的控制器中调用了makeLists().',
        'invalid_column_datetime' => "栏值 ':column' 不是时间对象, 缺少了 \$dates 在模型中的引用吗?",
        'pagination' => '显示记录: :from-:to :total',
        'prev_page' => '之前页',
        'next_page' => '下一页',
        'loading' => '加载中...',
        'setup_title' => '建立列表',
        'setup_help' => '使用多选框选择你想在列表中看到的栏. 你可以通过拖拽调整栏的位置.',
        'records_per_page' => '每页的记录',
        'records_per_page_help' => '选择每页想显示的记录数量. 请注意一页中太多记录可能会降低性能.',
        'delete_selected' => '删除选择的',
        'delete_selected_empty' => '没有需要删除的记录.',
        'delete_selected_confirm' => '删除选中的记录?',
        'delete_selected_success' => '成功删除选择的记录.',
    ],
    'fileupload' => [
        'attachment' => '附件',
        'help' => '给附件添加标题和描述.',
        'title_label' => '标题',
        'description_label' => '描述'
    ],
    'form' => [
        'create_title' => '新 :name',
        'update_title' => '编辑 :name',
        'preview_title' => '预览 :name',
        'create_success' => ':name 创建成功',
        'update_success' => ':name 更新成功',
        'delete_success' => ':name 删除成功',
        'missing_id' => '表单记录ID没有指定.',
        'missing_model' => ':class 中使用的表单没有定义的model.',
        'missing_definition' => "表单不包含字段 ':field'.",
        'not_found' => '表单 ID :id 找不到.',
        'action_confirm' => '你确定?',
        'create' => '创建',
        'create_and_close' => '创建和关闭',
        'creating' => '创建中...',
        'creating_name' => '创建 :name...',
        'save' => '保存',
        'save_and_close' => '保存和关闭',
        'saving' => '保存...',
        'saving_name' => '保存 :name...',
        'delete' => '删除',
        'deleting' => '删除中...',
        'deleting_name' => '删除 :name...',
        'reset_default' => '重置到默认',
        'resetting' => '重置',
        'resetting_name' => '重置 :name',
        'undefined_tab' => '杂项',
        'field_off' => '关',
        'field_on' => '开',
        'add' => '增加',
        'apply' => '应用',
        'cancel' => '取消',
        'close' => '关闭',
        'confirm' => '确认',
        'reload' => '重载',
        'ok' => 'OK',
        'or' => '或',
        'confirm_tab_close' => '你真的想要关闭这个标签吗? 未保存的改变会丢失.',
        'behavior_not_ready' => '表单还没初始化, 确保你调用了控制器中的 initForm().',
        'preview_no_files_message' => '文件没有上传',
        'select' => '选择',
        'select_all' => 'all',
        'select_none' => 'none',
        'select_placeholder' => '请选择',
        'insert_row' => '插入行',
        'delete_row' => '删除行',
        'concurrency_file_changed_title' => '文件改动',
        'concurrency_file_changed_description' => "你正在编辑的文件正在被其他用户修改. 你可以重载或覆盖磁盘上的文件."
    ],
    'relation' => [
        'missing_config' => "关系没有':config'的配置文件.",
        'missing_definition' => "关系不包含 ':field' 的定义.",
        'missing_model' => "用于 :class 的关系没有定义好的model.",
        'invalid_action_single' => "这个操作不能在单一关系上执行.",
        'invalid_action_multi' => "这个操作不能在多重关系上执行.",
        'help' => "点击增加",
        'related_data' => "相关的 :name",
        'add' => "增加",
        'add_selected' => "增加选中的",
        'add_a_new' => "增加一个新的 :name",
        'link_selected' => "关联选中",
        'link_a_new' => "关联一个新的 :name",
        'cancel' => "取消",
        'close' => "关闭",
        'add_name' => "增加 :name",
        'create' => "创建",
        'create_name' => "创建 :name",
        'update' => "更新",
        'update_name' => "更新 :name",
        'preview' => "预览",
        'preview_name' => "预览 :name",
        'remove' => "移除",
        'remove_name' => "移除 :name",
        'delete' => "删除",
        'delete_name' => "删除 :name",
        'delete_confirm' => "你确定?",
        'link' => "关联",
        'link_name' => "关联 :name",
        'unlink' => "取消关联",
        'unlink_name' => "取消关联 :name",
        'unlink_confirm' => "你确定?",
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' ID :id 找不到",
        'missing_id' => '没有指定的ID查找model记录.',
        'missing_relation' => "Model ':class' 不包含 ':relation'.",
        'missing_method' => "Model ':class' 不包含 ':method'.",
        'invalid_class' => "Model :model 在 :class 中是不合法的, 必须继承 \\Model class.",
        'mass_assignment_failed' => "针对Model属性':attribute'的大量赋值失败."
    ],
    'warnings' => [
        'tips' => '系统配置技巧',
        'tips_description' => '你需要注意那些issue, 以使系统配置正确.',
        'permissions'  => '目录 :name 或子目录对PHP不可写. 请对这个目录上的webserver设置正确的权限.',
        'extension' => 'PHP扩展 :name 没安装. 请安装这个库并且激活扩展.'
    ],
    'editor' => [
        'menu_label' => '代码编辑器选项',
        'menu_description' => '自定义代码编辑器选项, 比如字体大小和颜色主题.',
        'font_size' => '字体大小',
        'tab_size' => '标签大小',
        'use_hard_tabs' => '使用tabs缩进',
        'code_folding' => '代码折叠',
        'word_wrap' => '自动换行',
        'highlight_active_line' => '高亮活动的行',
        'show_invisibles' => '显示隐藏字符',
        'show_gutter' => '显示gutter',
        'theme' => '色彩主题'
    ],
    'tooltips' => [
        'preview_website' => '预览网站'
    ],
    'mysettings' => [
        'menu_label' => '我的设置',
        'menu_description' => '设置涉及到你的管理帐号'
    ],
    'myaccount' => [
        'menu_label' => '我的账户',
        'menu_description' => '更新你的账户细节, 比如名字, 邮件地址和密码.',
        'menu_keywords' => '安全登录'
    ],
    'branding' => [
        'menu_label' => '自定义后台',
        'menu_description' => '自定义管理区域, 比如名字, 颜色和logo.',
        'brand' => '品牌',
        'logo' => 'Logo',
        'logo_description' => '上传自定义logo到后台.',
        'app_name' => '站点名称',
        'app_name_description' => '这个名称显示在后台的标题区域.',
        'app_tagline' => '站点标语',
        'app_tagline_description' => '标语显示在后台的登录界面.',
        'colors' => '颜色',
        'primary_light' => '主要 (Light)',
        'primary_dark' => '主要 (Dark)',
        'secondary_light' => '次要 (Light)',
        'secondary_dark' => '次要 (Dark)',
        'styles' => '样式',
        'custom_stylesheet' => '自定义样式'
    ],
    'backend_preferences' => [
        'menu_label' => '后台设置',
        'menu_description' => '管理你的后台设置, 比如希望使用的语言。',
        'locale' => '语言',
        'locale_comment' => '选择你希望使用的本地语言。'
    ],
    'access_log' => [
        'hint' => '这个log显示了管理员成功登录的信息. 记录保持:days天。',
        'menu_label' => '访问日志',
        'menu_description' => '查看成功登陆后台用户日志。',
        'created_at' => '日期 & 时间',
        'login' => '登录',
        'ip_address' => 'IP地址',
        'first_name' => '名',
        'last_name' => '姓',
        'email' => 'Email'
    ],
    'filter' => [
      'all' => '全部'
    ]
];