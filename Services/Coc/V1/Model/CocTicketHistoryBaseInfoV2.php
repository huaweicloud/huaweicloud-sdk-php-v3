<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocTicketHistoryBaseInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocTicketHistoryBaseInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action
    * actionNameZh  action中文名称
    * actionNameEn  action英文名称
    * operator  操作人ID
    * status  当前状态
    * startTime  操作开始时间
    * stopTime  操作结束时间
    * comment  备注信息
    * enumDataList  枚举数据列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'actionNameZh' => 'string',
            'actionNameEn' => 'string',
            'operator' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'stopTime' => 'string',
            'comment' => 'string',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\CocTicketEnumDataV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action
    * actionNameZh  action中文名称
    * actionNameEn  action英文名称
    * operator  操作人ID
    * status  当前状态
    * startTime  操作开始时间
    * stopTime  操作结束时间
    * comment  备注信息
    * enumDataList  枚举数据列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'actionNameZh' => null,
        'actionNameEn' => null,
        'operator' => null,
        'status' => null,
        'startTime' => null,
        'stopTime' => null,
        'comment' => null,
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
    * action  action
    * actionNameZh  action中文名称
    * actionNameEn  action英文名称
    * operator  操作人ID
    * status  当前状态
    * startTime  操作开始时间
    * stopTime  操作结束时间
    * comment  备注信息
    * enumDataList  枚举数据列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'actionNameZh' => 'action_name_zh',
            'actionNameEn' => 'action_name_en',
            'operator' => 'operator',
            'status' => 'status',
            'startTime' => 'start_time',
            'stopTime' => 'stop_time',
            'comment' => 'comment',
            'enumDataList' => 'enum_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action
    * actionNameZh  action中文名称
    * actionNameEn  action英文名称
    * operator  操作人ID
    * status  当前状态
    * startTime  操作开始时间
    * stopTime  操作结束时间
    * comment  备注信息
    * enumDataList  枚举数据列表
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'actionNameZh' => 'setActionNameZh',
            'actionNameEn' => 'setActionNameEn',
            'operator' => 'setOperator',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'stopTime' => 'setStopTime',
            'comment' => 'setComment',
            'enumDataList' => 'setEnumDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action
    * actionNameZh  action中文名称
    * actionNameEn  action英文名称
    * operator  操作人ID
    * status  当前状态
    * startTime  操作开始时间
    * stopTime  操作结束时间
    * comment  备注信息
    * enumDataList  枚举数据列表
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'actionNameZh' => 'getActionNameZh',
            'actionNameEn' => 'getActionNameEn',
            'operator' => 'getOperator',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'stopTime' => 'getStopTime',
            'comment' => 'getComment',
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionNameZh'] = isset($data['actionNameZh']) ? $data['actionNameZh'] : null;
        $this->container['actionNameEn'] = isset($data['actionNameEn']) ? $data['actionNameEn'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['stopTime'] = isset($data['stopTime']) ? $data['stopTime'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 100)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) > 100)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) > 100)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 50)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 100)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 100)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) > 100)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 10000)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
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
    * Gets action
    *  action
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
    * @param string|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets actionNameZh
    *  action中文名称
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
    * @param string|null $actionNameZh action中文名称
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
    *  action英文名称
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
    * @param string|null $actionNameEn action英文名称
    *
    * @return $this
    */
    public function setActionNameEn($actionNameEn)
    {
        $this->container['actionNameEn'] = $actionNameEn;
        return $this;
    }

    /**
    * Gets operator
    *  操作人ID
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
    * @param string|null $operator 操作人ID
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets status
    *  当前状态
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
    * @param string|null $status 当前状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  操作开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 操作开始时间
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
    *  操作结束时间
    *
    * @return string|null
    */
    public function getStopTime()
    {
        return $this->container['stopTime'];
    }

    /**
    * Sets stopTime
    *
    * @param string|null $stopTime 操作结束时间
    *
    * @return $this
    */
    public function setStopTime($stopTime)
    {
        $this->container['stopTime'] = $stopTime;
        return $this;
    }

    /**
    * Gets comment
    *  备注信息
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
    * @param string|null $comment 备注信息
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举数据列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CocTicketEnumDataV2[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CocTicketEnumDataV2[]|null $enumDataList 枚举数据列表
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

