<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobActions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobActions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * unavailableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * currentAction  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableActions' => 'string[]',
            'unavailableActions' => 'string[]',
            'currentAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * unavailableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * currentAction  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableActions' => null,
        'unavailableActions' => null,
        'currentAction' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * availableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * unavailableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * currentAction  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableActions' => 'available_actions',
            'unavailableActions' => 'unavailable_actions',
            'currentAction' => 'current_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * unavailableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * currentAction  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @var string[]
    */
    protected static $setters = [
            'availableActions' => 'setAvailableActions',
            'unavailableActions' => 'setUnavailableActions',
            'currentAction' => 'setCurrentAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * unavailableActions  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    * currentAction  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @var string[]
    */
    protected static $getters = [
            'availableActions' => 'getAvailableActions',
            'unavailableActions' => 'getUnavailableActions',
            'currentAction' => 'getCurrentAction'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const CURRENT_ACTION_API_CONFIGURATION_ACTION = 'API_CONFIGURATION_ACTION';
    const CURRENT_ACTION_CHANGE = 'CHANGE';
    const CURRENT_ACTION_CHANGE_MODE = 'CHANGE_MODE';
    const CURRENT_ACTION_CHOOSE_OBJECT = 'CHOOSE_OBJECT';
    const CURRENT_ACTION__CLONE = 'CLONE';
    const CURRENT_ACTION_CONTINUE_APPLY = 'CONTINUE_APPLY';
    const CURRENT_ACTION_CONTINUE_CAPTURE = 'CONTINUE_CAPTURE';
    const CURRENT_ACTION_CONTINUE_JOB = 'CONTINUE_JOB';
    const CURRENT_ACTION_CREATE = 'CREATE';
    const CURRENT_ACTION_DELETE = 'DELETE';
    const CURRENT_ACTION_FREE_RESOURCE = 'FREE_RESOURCE';
    const CURRENT_ACTION_JUMP_RETRY = 'JUMP_RETRY';
    const CURRENT_ACTION_MODIFY_CONFIGURATION = 'MODIFY_CONFIGURATION';
    const CURRENT_ACTION_MODIFY_DB_CONFIG = 'MODIFY_DB_CONFIG';
    const CURRENT_ACTION_MODIFY_TASK_NUMBER = 'MODIFY_TASK_NUMBER';
    const CURRENT_ACTION_NODE_FLAVOR_MODIFY = 'NODE_FLAVOR_MODIFY';
    const CURRENT_ACTION_ORDER_INFO = 'ORDER_INFO';
    const CURRENT_ACTION_PAUSE = 'PAUSE';
    const CURRENT_ACTION_PAY_ORDER = 'PAY_ORDER';
    const CURRENT_ACTION_PRE_CHECK = 'PRE_CHECK';
    const CURRENT_ACTION_QUERY_PRE_CHECK = 'QUERY_PRE_CHECK';
    const CURRENT_ACTION_RESET = 'RESET';
    const CURRENT_ACTION_RESET_DB_PWD = 'RESET_DB_PWD';
    const CURRENT_ACTION_RETRY = 'RETRY';
    const CURRENT_ACTION_START = 'START';
    const CURRENT_ACTION_START_INCR = 'START_INCR';
    const CURRENT_ACTION_STOP_APPLY = 'STOP_APPLY';
    const CURRENT_ACTION_STOP_CAPTURE = 'STOP_CAPTURE';
    const CURRENT_ACTION_STOP_JOB = 'STOP_JOB';
    const CURRENT_ACTION_SWITCH_OVER = 'SWITCH_OVER';
    const CURRENT_ACTION_TO_PERIOD = 'TO_PERIOD';
    const CURRENT_ACTION_TO_RENEW = 'TO_RENEW';
    const CURRENT_ACTION_UNSUBSCRIBE = 'UNSUBSCRIBE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCurrentActionAllowableValues()
    {
        return [
            self::CURRENT_ACTION_API_CONFIGURATION_ACTION,
            self::CURRENT_ACTION_CHANGE,
            self::CURRENT_ACTION_CHANGE_MODE,
            self::CURRENT_ACTION_CHOOSE_OBJECT,
            self::CURRENT_ACTION__CLONE,
            self::CURRENT_ACTION_CONTINUE_APPLY,
            self::CURRENT_ACTION_CONTINUE_CAPTURE,
            self::CURRENT_ACTION_CONTINUE_JOB,
            self::CURRENT_ACTION_CREATE,
            self::CURRENT_ACTION_DELETE,
            self::CURRENT_ACTION_FREE_RESOURCE,
            self::CURRENT_ACTION_JUMP_RETRY,
            self::CURRENT_ACTION_MODIFY_CONFIGURATION,
            self::CURRENT_ACTION_MODIFY_DB_CONFIG,
            self::CURRENT_ACTION_MODIFY_TASK_NUMBER,
            self::CURRENT_ACTION_NODE_FLAVOR_MODIFY,
            self::CURRENT_ACTION_ORDER_INFO,
            self::CURRENT_ACTION_PAUSE,
            self::CURRENT_ACTION_PAY_ORDER,
            self::CURRENT_ACTION_PRE_CHECK,
            self::CURRENT_ACTION_QUERY_PRE_CHECK,
            self::CURRENT_ACTION_RESET,
            self::CURRENT_ACTION_RESET_DB_PWD,
            self::CURRENT_ACTION_RETRY,
            self::CURRENT_ACTION_START,
            self::CURRENT_ACTION_START_INCR,
            self::CURRENT_ACTION_STOP_APPLY,
            self::CURRENT_ACTION_STOP_CAPTURE,
            self::CURRENT_ACTION_STOP_JOB,
            self::CURRENT_ACTION_SWITCH_OVER,
            self::CURRENT_ACTION_TO_PERIOD,
            self::CURRENT_ACTION_TO_RENEW,
            self::CURRENT_ACTION_UNSUBSCRIBE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['availableActions'] = isset($data['availableActions']) ? $data['availableActions'] : null;
        $this->container['unavailableActions'] = isset($data['unavailableActions']) ? $data['unavailableActions'] : null;
        $this->container['currentAction'] = isset($data['currentAction']) ? $data['currentAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availableActions'] === null) {
            $invalidProperties[] = "'availableActions' can't be null";
        }
        if ($this->container['unavailableActions'] === null) {
            $invalidProperties[] = "'unavailableActions' can't be null";
        }
        if ($this->container['currentAction'] === null) {
            $invalidProperties[] = "'currentAction' can't be null";
        }
            $allowedValues = $this->getCurrentActionAllowableValues();
                if (!is_null($this->container['currentAction']) && !in_array($this->container['currentAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'currentAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets availableActions
    *  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    *
    * @return string[]
    */
    public function getAvailableActions()
    {
        return $this->container['availableActions'];
    }

    /**
    * Sets availableActions
    *
    * @param string[] $availableActions 任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    *
    * @return $this
    */
    public function setAvailableActions($availableActions)
    {
        $this->container['availableActions'] = $availableActions;
        return $this;
    }

    /**
    * Gets unavailableActions
    *  任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    *
    * @return string[]
    */
    public function getUnavailableActions()
    {
        return $this->container['unavailableActions'];
    }

    /**
    * Sets unavailableActions
    *
    * @param string[] $unavailableActions 任务可操作命令集合。 - CREATE：创建任务 - CHOOSE_OBJECT：选择对象，任务增量中再编辑 - PRE_CHECK：预检查 - CHANGE_MODE：修改任务模式 - FREE_RESOURCE：释放资源 - MODIFY_DB_CONFIG：修改数据库配置 - RESET_DB_PWD：重置数据库密码（源库、目标库） - MODIFY_CONFIGURATION：修改任务配置 - PAUSE：暂停任务 - START：启动任务 - CHANGE：修改任务 - RETRY：重试任务 - RESET：重置任务 - DELETE：删除任务 - QUERY_PRE_CHECK：预检查 - SWITCH_OVER：容灾倒换 - START_INCR：CASSANDRA启动增量任务 - MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 - CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 - STOP_JOB：oracle-GaussDB分布式:停止任务 - CONTINUE_CAPTURE：启动抓取 - STOP_CAPTURE：停止抓取 - CONTINUE_APPLY：启动回放 - STOP_APPLY：停止回放 - PAY_ORDER：包年包月支付订单 - UNSUBSCRIBE：包年包月退订 - TO_PERIOD：转包周期 - TO_RENEW：包周期续费 - ORDER_INFO：订单详情 - CHANGE_FLAVOR：规格变更 - CLONE：克隆任务
    *
    * @return $this
    */
    public function setUnavailableActions($unavailableActions)
    {
        $this->container['unavailableActions'] = $unavailableActions;
        return $this;
    }

    /**
    * Gets currentAction
    *  任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @return string
    */
    public function getCurrentAction()
    {
        return $this->container['currentAction'];
    }

    /**
    * Sets currentAction
    *
    * @param string $currentAction 任务当前操作命令。取值： - API_CONFIGURATION_ACTION：OPEN API配置中的任务能调用。 - CHANGE：修改任务。 - CHANGE_MODE：修改任务模式。 - CHOOSE_OBJECT：选择对象。 - CLONE：克隆任务。 - CONTINUE_APPLY：启动回放，Oracle同步到GaussDB分布式适用。 - CONTINUE_CAPTURE：启动抓取，Oracle同步到GaussDB分布式适用。 - CONTINUE_JOB：启动失败或者停止的任务，Oracle同步到GaussDB分布式适用。 - CREATE：创建任务。 - DELETE：删除任务。 - FREE_RESOURCE：释放资源。 - JUMP_RETRY：跳跃续传任务。 - MODIFY_CONFIGURATION：修改任务配置。 - MODIFY_DB_CONFIG：修改数据库配置。 - MODIFY_TASK_NUMBER：修改线程数配置。 - NODE_FLAVOR_MODIFY：规格变更。 - ORDER_INFO：订单详情。 - PAUSE：暂停任务。 - PAY_ORDER：包年/包月支付订单。 - PRE_CHECK：预检查。 - QUERY_PRE_CHECK：查询预检查结果。 - RESET：重置任务。 - RESET_DB_PWD：重置数据库密码（源库、目标库）。 - RETRY：重试任务。 - START：启动任务。 - START_INCR：启动增量任务。 - STOP_APPLY：停止回放，Oracle同步到GaussDB分布式适用。 - STOP_CAPTURE：停止抓取，Oracle同步到GaussDB分布式适用。 - STOP_JOB：停止任务，Oracle同步到GaussDB分布式适用。 - SWITCH_OVER：灾备倒换。 - TO_PERIOD：转包年/包月任务。 - TO_RENEW：包年/包月任务续费。 - UNSUBSCRIBE：包年/包月任务退订。
    *
    * @return $this
    */
    public function setCurrentAction($currentAction)
    {
        $this->container['currentAction'] = $currentAction;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

