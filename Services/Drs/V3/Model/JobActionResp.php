<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobActionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobActionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableActions  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * unavailableActions  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * currentAction  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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
    * availableActions  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * unavailableActions  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * currentAction  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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
    * availableActions  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * unavailableActions  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * currentAction  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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
    * availableActions  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * unavailableActions  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * currentAction  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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
    * availableActions  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * unavailableActions  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    * currentAction  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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
    const AVAILABLE_ACTIONS_CREATE = 'CREATE';
    const AVAILABLE_ACTIONS_CHOOSE_OBJECT = 'CHOOSE_OBJECT';
    const AVAILABLE_ACTIONS_PRE_CHECK = 'PRE_CHECK';
    const AVAILABLE_ACTIONS_CHANGE_MODE = 'CHANGE_MODE';
    const AVAILABLE_ACTIONS_FREE_RESOURCE = 'FREE_RESOURCE';
    const AVAILABLE_ACTIONS_MODIFY_DB_CONFIG = 'MODIFY_DB_CONFIG';
    const AVAILABLE_ACTIONS_RESET_DB_PWD = 'RESET_DB_PWD';
    const AVAILABLE_ACTIONS_MODIFY_CONFIGURATION = 'MODIFY_CONFIGURATION';
    const AVAILABLE_ACTIONS_PAUSE = 'PAUSE';
    const AVAILABLE_ACTIONS_START = 'START';
    const AVAILABLE_ACTIONS_CHANGE = 'CHANGE';
    const AVAILABLE_ACTIONS_RETRY = 'RETRY';
    const AVAILABLE_ACTIONS_RESET = 'RESET';
    const AVAILABLE_ACTIONS_DELETE = 'DELETE';
    const AVAILABLE_ACTIONS_QUERY_PRE_CHECK = 'QUERY_PRE_CHECK';
    const AVAILABLE_ACTIONS_SWITCH_OVER = 'SWITCH_OVER';
    const AVAILABLE_ACTIONS_MODIFY_SPECIFICATION_ID = 'MODIFY_SPECIFICATION_ID';
    const AVAILABLE_ACTIONS_JUMP_RETRY = 'JUMP_RETRY';
    const AVAILABLE_ACTIONS_START_INCR = 'START_INCR';
    const AVAILABLE_ACTIONS_MODIFY_TASK_NUMBER = 'MODIFY_TASK_NUMBER';
    const AVAILABLE_ACTIONS_CONTINUE_JOB = 'CONTINUE_JOB';
    const AVAILABLE_ACTIONS_STOP_JOB = 'STOP_JOB';
    const AVAILABLE_ACTIONS_CONTINUE_CAPTURE = 'CONTINUE_CAPTURE';
    const AVAILABLE_ACTIONS_STOP_CAPTURE = 'STOP_CAPTURE';
    const AVAILABLE_ACTIONS_CONTINUE_APPLY = 'CONTINUE_APPLY';
    const AVAILABLE_ACTIONS_API_CONFIGURATION_ACTION = 'API_CONFIGURATION_ACTION';
    const AVAILABLE_ACTIONS_STOP_APPLY = 'STOP_APPLY';
    const AVAILABLE_ACTIONS_PAY_ORDER = 'PAY_ORDER';
    const AVAILABLE_ACTIONS_UNSUBSCRIBE = 'UNSUBSCRIBE';
    const AVAILABLE_ACTIONS_TO_PERIOD = 'TO_PERIOD';
    const AVAILABLE_ACTIONS_TO_RENEW = 'TO_RENEW';
    const AVAILABLE_ACTIONS_ORDER_INFO = 'ORDER_INFO';
    const AVAILABLE_ACTIONS_CHANGE_FLAVOR = 'CHANGE_FLAVOR';
    const AVAILABLE_ACTIONS__CLONE = 'CLONE';
    const UNAVAILABLE_ACTIONS_CREATE = 'CREATE';
    const UNAVAILABLE_ACTIONS_CHOOSE_OBJECT = 'CHOOSE_OBJECT';
    const UNAVAILABLE_ACTIONS_PRE_CHECK = 'PRE_CHECK';
    const UNAVAILABLE_ACTIONS_CHANGE_MODE = 'CHANGE_MODE';
    const UNAVAILABLE_ACTIONS_FREE_RESOURCE = 'FREE_RESOURCE';
    const UNAVAILABLE_ACTIONS_MODIFY_DB_CONFIG = 'MODIFY_DB_CONFIG';
    const UNAVAILABLE_ACTIONS_RESET_DB_PWD = 'RESET_DB_PWD';
    const UNAVAILABLE_ACTIONS_MODIFY_CONFIGURATION = 'MODIFY_CONFIGURATION';
    const UNAVAILABLE_ACTIONS_PAUSE = 'PAUSE';
    const UNAVAILABLE_ACTIONS_START = 'START';
    const UNAVAILABLE_ACTIONS_CHANGE = 'CHANGE';
    const UNAVAILABLE_ACTIONS_RETRY = 'RETRY';
    const UNAVAILABLE_ACTIONS_RESET = 'RESET';
    const UNAVAILABLE_ACTIONS_DELETE = 'DELETE';
    const UNAVAILABLE_ACTIONS_QUERY_PRE_CHECK = 'QUERY_PRE_CHECK';
    const UNAVAILABLE_ACTIONS_SWITCH_OVER = 'SWITCH_OVER';
    const UNAVAILABLE_ACTIONS_MODIFY_SPECIFICATION_ID = 'MODIFY_SPECIFICATION_ID';
    const UNAVAILABLE_ACTIONS_JUMP_RETRY = 'JUMP_RETRY';
    const UNAVAILABLE_ACTIONS_START_INCR = 'START_INCR';
    const UNAVAILABLE_ACTIONS_MODIFY_TASK_NUMBER = 'MODIFY_TASK_NUMBER';
    const UNAVAILABLE_ACTIONS_CONTINUE_JOB = 'CONTINUE_JOB';
    const UNAVAILABLE_ACTIONS_STOP_JOB = 'STOP_JOB';
    const UNAVAILABLE_ACTIONS_CONTINUE_CAPTURE = 'CONTINUE_CAPTURE';
    const UNAVAILABLE_ACTIONS_STOP_CAPTURE = 'STOP_CAPTURE';
    const UNAVAILABLE_ACTIONS_CONTINUE_APPLY = 'CONTINUE_APPLY';
    const UNAVAILABLE_ACTIONS_API_CONFIGURATION_ACTION = 'API_CONFIGURATION_ACTION';
    const UNAVAILABLE_ACTIONS_STOP_APPLY = 'STOP_APPLY';
    const UNAVAILABLE_ACTIONS_PAY_ORDER = 'PAY_ORDER';
    const UNAVAILABLE_ACTIONS_UNSUBSCRIBE = 'UNSUBSCRIBE';
    const UNAVAILABLE_ACTIONS_TO_PERIOD = 'TO_PERIOD';
    const UNAVAILABLE_ACTIONS_TO_RENEW = 'TO_RENEW';
    const UNAVAILABLE_ACTIONS_ORDER_INFO = 'ORDER_INFO';
    const UNAVAILABLE_ACTIONS_CHANGE_FLAVOR = 'CHANGE_FLAVOR';
    const UNAVAILABLE_ACTIONS__CLONE = 'CLONE';
    const CURRENT_ACTION_SWITCH_OVER = 'SWITCH_OVER';
    const CURRENT_ACTION_STOP_JOB = 'STOP_JOB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAvailableActionsAllowableValues()
    {
        return [
            self::AVAILABLE_ACTIONS_CREATE,
            self::AVAILABLE_ACTIONS_CHOOSE_OBJECT,
            self::AVAILABLE_ACTIONS_PRE_CHECK,
            self::AVAILABLE_ACTIONS_CHANGE_MODE,
            self::AVAILABLE_ACTIONS_FREE_RESOURCE,
            self::AVAILABLE_ACTIONS_MODIFY_DB_CONFIG,
            self::AVAILABLE_ACTIONS_RESET_DB_PWD,
            self::AVAILABLE_ACTIONS_MODIFY_CONFIGURATION,
            self::AVAILABLE_ACTIONS_PAUSE,
            self::AVAILABLE_ACTIONS_START,
            self::AVAILABLE_ACTIONS_CHANGE,
            self::AVAILABLE_ACTIONS_RETRY,
            self::AVAILABLE_ACTIONS_RESET,
            self::AVAILABLE_ACTIONS_DELETE,
            self::AVAILABLE_ACTIONS_QUERY_PRE_CHECK,
            self::AVAILABLE_ACTIONS_SWITCH_OVER,
            self::AVAILABLE_ACTIONS_MODIFY_SPECIFICATION_ID,
            self::AVAILABLE_ACTIONS_JUMP_RETRY,
            self::AVAILABLE_ACTIONS_START_INCR,
            self::AVAILABLE_ACTIONS_MODIFY_TASK_NUMBER,
            self::AVAILABLE_ACTIONS_CONTINUE_JOB,
            self::AVAILABLE_ACTIONS_STOP_JOB,
            self::AVAILABLE_ACTIONS_CONTINUE_CAPTURE,
            self::AVAILABLE_ACTIONS_STOP_CAPTURE,
            self::AVAILABLE_ACTIONS_CONTINUE_APPLY,
            self::AVAILABLE_ACTIONS_API_CONFIGURATION_ACTION,
            self::AVAILABLE_ACTIONS_STOP_APPLY,
            self::AVAILABLE_ACTIONS_PAY_ORDER,
            self::AVAILABLE_ACTIONS_UNSUBSCRIBE,
            self::AVAILABLE_ACTIONS_TO_PERIOD,
            self::AVAILABLE_ACTIONS_TO_RENEW,
            self::AVAILABLE_ACTIONS_ORDER_INFO,
            self::AVAILABLE_ACTIONS_CHANGE_FLAVOR,
            self::AVAILABLE_ACTIONS__CLONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnavailableActionsAllowableValues()
    {
        return [
            self::UNAVAILABLE_ACTIONS_CREATE,
            self::UNAVAILABLE_ACTIONS_CHOOSE_OBJECT,
            self::UNAVAILABLE_ACTIONS_PRE_CHECK,
            self::UNAVAILABLE_ACTIONS_CHANGE_MODE,
            self::UNAVAILABLE_ACTIONS_FREE_RESOURCE,
            self::UNAVAILABLE_ACTIONS_MODIFY_DB_CONFIG,
            self::UNAVAILABLE_ACTIONS_RESET_DB_PWD,
            self::UNAVAILABLE_ACTIONS_MODIFY_CONFIGURATION,
            self::UNAVAILABLE_ACTIONS_PAUSE,
            self::UNAVAILABLE_ACTIONS_START,
            self::UNAVAILABLE_ACTIONS_CHANGE,
            self::UNAVAILABLE_ACTIONS_RETRY,
            self::UNAVAILABLE_ACTIONS_RESET,
            self::UNAVAILABLE_ACTIONS_DELETE,
            self::UNAVAILABLE_ACTIONS_QUERY_PRE_CHECK,
            self::UNAVAILABLE_ACTIONS_SWITCH_OVER,
            self::UNAVAILABLE_ACTIONS_MODIFY_SPECIFICATION_ID,
            self::UNAVAILABLE_ACTIONS_JUMP_RETRY,
            self::UNAVAILABLE_ACTIONS_START_INCR,
            self::UNAVAILABLE_ACTIONS_MODIFY_TASK_NUMBER,
            self::UNAVAILABLE_ACTIONS_CONTINUE_JOB,
            self::UNAVAILABLE_ACTIONS_STOP_JOB,
            self::UNAVAILABLE_ACTIONS_CONTINUE_CAPTURE,
            self::UNAVAILABLE_ACTIONS_STOP_CAPTURE,
            self::UNAVAILABLE_ACTIONS_CONTINUE_APPLY,
            self::UNAVAILABLE_ACTIONS_API_CONFIGURATION_ACTION,
            self::UNAVAILABLE_ACTIONS_STOP_APPLY,
            self::UNAVAILABLE_ACTIONS_PAY_ORDER,
            self::UNAVAILABLE_ACTIONS_UNSUBSCRIBE,
            self::UNAVAILABLE_ACTIONS_TO_PERIOD,
            self::UNAVAILABLE_ACTIONS_TO_RENEW,
            self::UNAVAILABLE_ACTIONS_ORDER_INFO,
            self::UNAVAILABLE_ACTIONS_CHANGE_FLAVOR,
            self::UNAVAILABLE_ACTIONS__CLONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCurrentActionAllowableValues()
    {
        return [
            self::CURRENT_ACTION_SWITCH_OVER,
            self::CURRENT_ACTION_STOP_JOB,
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
    *  任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    *
    * @return string[]|null
    */
    public function getAvailableActions()
    {
        return $this->container['availableActions'];
    }

    /**
    * Sets availableActions
    *
    * @param string[]|null $availableActions 任务可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
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
    *  任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
    *
    * @return string[]|null
    */
    public function getUnavailableActions()
    {
        return $this->container['unavailableActions'];
    }

    /**
    * Sets unavailableActions
    *
    * @param string[]|null $unavailableActions 任务不可操作命令集合。 取值： CREATE：创建任务 CHOOSE_OBJECT：选择对象 PRE_CHECK：预检查 CHANGE_MODE：修改任务模式 FREE_RESOURCE：释放资源 MODIFY_DB_CONFIG：修改数据库配置 RESET_DB_PWD：重置数据库密码（源库、目标库） MODIFY_CONFIGURATION：修改任务配置 PAUSE：暂停任务 START：启动任务 CHANGE：修改任务 RETRY：重试任务 RESET：重置任务 DELETE：删除任务 QUERY_PRE_CHECK：预检查 SWITCH_OVER：容灾倒换 START_INCR：CASSANDRA启动增量任务 MODIFY_TASK_NUMBER：CASSANDRA修改线程数配置 CONTINUE_JOB：oracle-GaussDB分布式:启动失败或者停止的任务 STOP_JOB：oracle-GaussDB分布式:停止任务 CONTINUE_CAPTURE：oracle-GaussDB分布式:启动抓取 STOP_CAPTURE：oracle-GaussDB分布式:停止抓取 CONTINUE_APPLY：oracle-GaussDB分布式:启动回放 STOP_APPLY：oracle-GaussDB分布式:停止回放 PAY_ORDER：包年包月支付订单 UNSUBSCRIBE：包年包月退订 TO_PERIOD：转包周期 TO_RENEW：包周期续费 ORDER_INFO：订单详情 CHANGE_FLAVOR：规格变更 CLONE：克隆任务
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
    *  示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
    *
    * @return string|null
    */
    public function getCurrentAction()
    {
        return $this->container['currentAction'];
    }

    /**
    * Sets currentAction
    *
    * @param string|null $currentAction 示例： SWITCH_OVER：灾备倒换中 STOP_JOB：任务暂停中
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

