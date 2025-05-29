<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicketHistoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicketHistoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * actionId  操作标识
    * action  动作
    * subAction  子动作
    * operator  操作人
    * comment  评论
    * id  主键
    * ticketId  单号
    * startTime  起始时间
    * stopTime  结束时间
    * targetType  对象类型
    * targetValue  对象值
    * isDeteted  待修改
    * updateTime  更新时间
    * actionNameZh  action中文名
    * actionNameEn  action英文名
    * actionTemplateZh  action中文模板
    * actionTemplateEn  action中文模板
    * status  工单状态
    * finalSubAction  最终子动作
    * enumDataList  枚举数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentCloudServiceId' => 'string',
            'description' => 'string',
            'levelId' => 'string',
            'mtmRegion' => 'string',
            'mtmType' => 'string',
            'sourceId' => 'string',
            'title' => 'string',
            'isChangeEvent' => 'bool',
            'isServiceInterrupt' => 'bool',
            'actionId' => 'string',
            'action' => 'string',
            'subAction' => 'string',
            'operator' => 'string',
            'comment' => 'string',
            'id' => 'string',
            'ticketId' => 'string',
            'startTime' => 'int',
            'stopTime' => 'int',
            'targetType' => 'string',
            'targetValue' => 'string',
            'isDeteted' => 'bool',
            'updateTime' => 'int',
            'actionNameZh' => 'string',
            'actionNameEn' => 'string',
            'actionTemplateZh' => 'string',
            'actionTemplateEn' => 'string',
            'status' => 'string',
            'finalSubAction' => 'string',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\EnumDataInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * actionId  操作标识
    * action  动作
    * subAction  子动作
    * operator  操作人
    * comment  评论
    * id  主键
    * ticketId  单号
    * startTime  起始时间
    * stopTime  结束时间
    * targetType  对象类型
    * targetValue  对象值
    * isDeteted  待修改
    * updateTime  更新时间
    * actionNameZh  action中文名
    * actionNameEn  action英文名
    * actionTemplateZh  action中文模板
    * actionTemplateEn  action中文模板
    * status  工单状态
    * finalSubAction  最终子动作
    * enumDataList  枚举数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentCloudServiceId' => null,
        'description' => null,
        'levelId' => null,
        'mtmRegion' => null,
        'mtmType' => null,
        'sourceId' => null,
        'title' => null,
        'isChangeEvent' => null,
        'isServiceInterrupt' => null,
        'actionId' => null,
        'action' => null,
        'subAction' => null,
        'operator' => null,
        'comment' => null,
        'id' => null,
        'ticketId' => null,
        'startTime' => 'int64',
        'stopTime' => 'int64',
        'targetType' => null,
        'targetValue' => null,
        'isDeteted' => null,
        'updateTime' => 'int64',
        'actionNameZh' => null,
        'actionNameEn' => null,
        'actionTemplateZh' => null,
        'actionTemplateEn' => null,
        'status' => null,
        'finalSubAction' => null,
        'enumDataList' => null
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
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * actionId  操作标识
    * action  动作
    * subAction  子动作
    * operator  操作人
    * comment  评论
    * id  主键
    * ticketId  单号
    * startTime  起始时间
    * stopTime  结束时间
    * targetType  对象类型
    * targetValue  对象值
    * isDeteted  待修改
    * updateTime  更新时间
    * actionNameZh  action中文名
    * actionNameEn  action英文名
    * actionTemplateZh  action中文模板
    * actionTemplateEn  action中文模板
    * status  工单状态
    * finalSubAction  最终子动作
    * enumDataList  枚举数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentCloudServiceId' => 'current_cloud_service_id',
            'description' => 'description',
            'levelId' => 'level_id',
            'mtmRegion' => 'mtm_region',
            'mtmType' => 'mtm_type',
            'sourceId' => 'source_id',
            'title' => 'title',
            'isChangeEvent' => 'is_change_event',
            'isServiceInterrupt' => 'is_service_interrupt',
            'actionId' => 'action_id',
            'action' => 'action',
            'subAction' => 'sub_action',
            'operator' => 'operator',
            'comment' => 'comment',
            'id' => 'id',
            'ticketId' => 'ticket_id',
            'startTime' => 'start_time',
            'stopTime' => 'stop_time',
            'targetType' => 'target_type',
            'targetValue' => 'target_value',
            'isDeteted' => 'is_deteted',
            'updateTime' => 'update_time',
            'actionNameZh' => 'action_name_zh',
            'actionNameEn' => 'action_name_en',
            'actionTemplateZh' => 'action_template_zh',
            'actionTemplateEn' => 'action_template_en',
            'status' => 'status',
            'finalSubAction' => 'final_sub_action',
            'enumDataList' => 'enum_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * actionId  操作标识
    * action  动作
    * subAction  子动作
    * operator  操作人
    * comment  评论
    * id  主键
    * ticketId  单号
    * startTime  起始时间
    * stopTime  结束时间
    * targetType  对象类型
    * targetValue  对象值
    * isDeteted  待修改
    * updateTime  更新时间
    * actionNameZh  action中文名
    * actionNameEn  action英文名
    * actionTemplateZh  action中文模板
    * actionTemplateEn  action中文模板
    * status  工单状态
    * finalSubAction  最终子动作
    * enumDataList  枚举数据
    *
    * @var string[]
    */
    protected static $setters = [
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'description' => 'setDescription',
            'levelId' => 'setLevelId',
            'mtmRegion' => 'setMtmRegion',
            'mtmType' => 'setMtmType',
            'sourceId' => 'setSourceId',
            'title' => 'setTitle',
            'isChangeEvent' => 'setIsChangeEvent',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'actionId' => 'setActionId',
            'action' => 'setAction',
            'subAction' => 'setSubAction',
            'operator' => 'setOperator',
            'comment' => 'setComment',
            'id' => 'setId',
            'ticketId' => 'setTicketId',
            'startTime' => 'setStartTime',
            'stopTime' => 'setStopTime',
            'targetType' => 'setTargetType',
            'targetValue' => 'setTargetValue',
            'isDeteted' => 'setIsDeteted',
            'updateTime' => 'setUpdateTime',
            'actionNameZh' => 'setActionNameZh',
            'actionNameEn' => 'setActionNameEn',
            'actionTemplateZh' => 'setActionTemplateZh',
            'actionTemplateEn' => 'setActionTemplateEn',
            'status' => 'setStatus',
            'finalSubAction' => 'setFinalSubAction',
            'enumDataList' => 'setEnumDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * actionId  操作标识
    * action  动作
    * subAction  子动作
    * operator  操作人
    * comment  评论
    * id  主键
    * ticketId  单号
    * startTime  起始时间
    * stopTime  结束时间
    * targetType  对象类型
    * targetValue  对象值
    * isDeteted  待修改
    * updateTime  更新时间
    * actionNameZh  action中文名
    * actionNameEn  action英文名
    * actionTemplateZh  action中文模板
    * actionTemplateEn  action中文模板
    * status  工单状态
    * finalSubAction  最终子动作
    * enumDataList  枚举数据
    *
    * @var string[]
    */
    protected static $getters = [
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'description' => 'getDescription',
            'levelId' => 'getLevelId',
            'mtmRegion' => 'getMtmRegion',
            'mtmType' => 'getMtmType',
            'sourceId' => 'getSourceId',
            'title' => 'getTitle',
            'isChangeEvent' => 'getIsChangeEvent',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'actionId' => 'getActionId',
            'action' => 'getAction',
            'subAction' => 'getSubAction',
            'operator' => 'getOperator',
            'comment' => 'getComment',
            'id' => 'getId',
            'ticketId' => 'getTicketId',
            'startTime' => 'getStartTime',
            'stopTime' => 'getStopTime',
            'targetType' => 'getTargetType',
            'targetValue' => 'getTargetValue',
            'isDeteted' => 'getIsDeteted',
            'updateTime' => 'getUpdateTime',
            'actionNameZh' => 'getActionNameZh',
            'actionNameEn' => 'getActionNameEn',
            'actionTemplateZh' => 'getActionTemplateZh',
            'actionTemplateEn' => 'getActionTemplateEn',
            'status' => 'getStatus',
            'finalSubAction' => 'getFinalSubAction',
            'enumDataList' => 'getEnumDataList'
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
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['levelId'] = isset($data['levelId']) ? $data['levelId'] : null;
        $this->container['mtmRegion'] = isset($data['mtmRegion']) ? $data['mtmRegion'] : null;
        $this->container['mtmType'] = isset($data['mtmType']) ? $data['mtmType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['isChangeEvent'] = isset($data['isChangeEvent']) ? $data['isChangeEvent'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['subAction'] = isset($data['subAction']) ? $data['subAction'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['stopTime'] = isset($data['stopTime']) ? $data['stopTime'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
        $this->container['isDeteted'] = isset($data['isDeteted']) ? $data['isDeteted'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['actionNameZh'] = isset($data['actionNameZh']) ? $data['actionNameZh'] : null;
        $this->container['actionNameEn'] = isset($data['actionNameEn']) ? $data['actionNameEn'] : null;
        $this->container['actionTemplateZh'] = isset($data['actionTemplateZh']) ? $data['actionTemplateZh'] : null;
        $this->container['actionTemplateEn'] = isset($data['actionTemplateEn']) ? $data['actionTemplateEn'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['finalSubAction'] = isset($data['finalSubAction']) ? $data['finalSubAction'] : null;
        $this->container['enumDataList'] = isset($data['enumDataList']) ? $data['enumDataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subAction']) && (mb_strlen($this->container['subAction']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'subAction', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['subAction']) && (mb_strlen($this->container['subAction']) < 0)) {
                $invalidProperties[] = "invalid value for 'subAction', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 50)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stopTime']) && ($this->container['stopTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'stopTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['stopTime']) && ($this->container['stopTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'stopTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionTemplateZh']) && (mb_strlen($this->container['actionTemplateZh']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'actionTemplateZh', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['actionTemplateZh']) && (mb_strlen($this->container['actionTemplateZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionTemplateZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionTemplateEn']) && (mb_strlen($this->container['actionTemplateEn']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'actionTemplateEn', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['actionTemplateEn']) && (mb_strlen($this->container['actionTemplateEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionTemplateEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finalSubAction']) && (mb_strlen($this->container['finalSubAction']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'finalSubAction', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['finalSubAction']) && (mb_strlen($this->container['finalSubAction']) < 0)) {
                $invalidProperties[] = "invalid value for 'finalSubAction', the character length must be bigger than or equal to 0.";
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
    * Gets currentCloudServiceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string|null $currentCloudServiceId 扩展字段
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets description
    *  扩展字段
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 扩展字段
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets levelId
    *  扩展字段
    *
    * @return string|null
    */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
    * Sets levelId
    *
    * @param string|null $levelId 扩展字段
    *
    * @return $this
    */
    public function setLevelId($levelId)
    {
        $this->container['levelId'] = $levelId;
        return $this;
    }

    /**
    * Gets mtmRegion
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmRegion()
    {
        return $this->container['mtmRegion'];
    }

    /**
    * Sets mtmRegion
    *
    * @param string|null $mtmRegion 扩展字段
    *
    * @return $this
    */
    public function setMtmRegion($mtmRegion)
    {
        $this->container['mtmRegion'] = $mtmRegion;
        return $this;
    }

    /**
    * Gets mtmType
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmType()
    {
        return $this->container['mtmType'];
    }

    /**
    * Sets mtmType
    *
    * @param string|null $mtmType 扩展字段
    *
    * @return $this
    */
    public function setMtmType($mtmType)
    {
        $this->container['mtmType'] = $mtmType;
        return $this;
    }

    /**
    * Gets sourceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 扩展字段
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets title
    *  扩展字段
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 扩展字段
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets isChangeEvent
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsChangeEvent()
    {
        return $this->container['isChangeEvent'];
    }

    /**
    * Sets isChangeEvent
    *
    * @param bool|null $isChangeEvent 是否变更事件
    *
    * @return $this
    */
    public function setIsChangeEvent($isChangeEvent)
    {
        $this->container['isChangeEvent'] = $isChangeEvent;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool|null $isServiceInterrupt 是否变更事件
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets actionId
    *  操作标识
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId 操作标识
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets action
    *  动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets subAction
    *  子动作
    *
    * @return string|null
    */
    public function getSubAction()
    {
        return $this->container['subAction'];
    }

    /**
    * Sets subAction
    *
    * @param string|null $subAction 子动作
    *
    * @return $this
    */
    public function setSubAction($subAction)
    {
        $this->container['subAction'] = $subAction;
        return $this;
    }

    /**
    * Gets operator
    *  操作人
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets comment
    *  评论
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 评论
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets id
    *  主键
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ticketId
    *  单号
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 单号
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 起始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets stopTime
    *  结束时间
    *
    * @return int|null
    */
    public function getStopTime()
    {
        return $this->container['stopTime'];
    }

    /**
    * Sets stopTime
    *
    * @param int|null $stopTime 结束时间
    *
    * @return $this
    */
    public function setStopTime($stopTime)
    {
        $this->container['stopTime'] = $stopTime;
        return $this;
    }

    /**
    * Gets targetType
    *  对象类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 对象类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetValue
    *  对象值
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue 对象值
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
        return $this;
    }

    /**
    * Gets isDeteted
    *  待修改
    *
    * @return bool|null
    */
    public function getIsDeteted()
    {
        return $this->container['isDeteted'];
    }

    /**
    * Sets isDeteted
    *
    * @param bool|null $isDeteted 待修改
    *
    * @return $this
    */
    public function setIsDeteted($isDeteted)
    {
        $this->container['isDeteted'] = $isDeteted;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets actionNameZh
    *  action中文名
    *
    * @return string|null
    */
    public function getActionNameZh()
    {
        return $this->container['actionNameZh'];
    }

    /**
    * Sets actionNameZh
    *
    * @param string|null $actionNameZh action中文名
    *
    * @return $this
    */
    public function setActionNameZh($actionNameZh)
    {
        $this->container['actionNameZh'] = $actionNameZh;
        return $this;
    }

    /**
    * Gets actionNameEn
    *  action英文名
    *
    * @return string|null
    */
    public function getActionNameEn()
    {
        return $this->container['actionNameEn'];
    }

    /**
    * Sets actionNameEn
    *
    * @param string|null $actionNameEn action英文名
    *
    * @return $this
    */
    public function setActionNameEn($actionNameEn)
    {
        $this->container['actionNameEn'] = $actionNameEn;
        return $this;
    }

    /**
    * Gets actionTemplateZh
    *  action中文模板
    *
    * @return string|null
    */
    public function getActionTemplateZh()
    {
        return $this->container['actionTemplateZh'];
    }

    /**
    * Sets actionTemplateZh
    *
    * @param string|null $actionTemplateZh action中文模板
    *
    * @return $this
    */
    public function setActionTemplateZh($actionTemplateZh)
    {
        $this->container['actionTemplateZh'] = $actionTemplateZh;
        return $this;
    }

    /**
    * Gets actionTemplateEn
    *  action中文模板
    *
    * @return string|null
    */
    public function getActionTemplateEn()
    {
        return $this->container['actionTemplateEn'];
    }

    /**
    * Sets actionTemplateEn
    *
    * @param string|null $actionTemplateEn action中文模板
    *
    * @return $this
    */
    public function setActionTemplateEn($actionTemplateEn)
    {
        $this->container['actionTemplateEn'] = $actionTemplateEn;
        return $this;
    }

    /**
    * Gets status
    *  工单状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 工单状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets finalSubAction
    *  最终子动作
    *
    * @return string|null
    */
    public function getFinalSubAction()
    {
        return $this->container['finalSubAction'];
    }

    /**
    * Sets finalSubAction
    *
    * @param string|null $finalSubAction 最终子动作
    *
    * @return $this
    */
    public function setFinalSubAction($finalSubAction)
    {
        $this->container['finalSubAction'] = $finalSubAction;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举数据
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\EnumDataInfo[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\EnumDataInfo[]|null $enumDataList 枚举数据
    *
    * @return $this
    */
    public function setEnumDataList($enumDataList)
    {
        $this->container['enumDataList'] = $enumDataList;
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

