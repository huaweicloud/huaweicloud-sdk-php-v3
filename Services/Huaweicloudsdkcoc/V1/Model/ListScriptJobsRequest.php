<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScriptJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScriptJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页参数
    * marker  分页参数
    * startTime  创建时间开始
    * endTime  创建时间结束
    * creator  创建人
    * status  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'creator' => 'string',
            'status' => 'string',
            'xLanguage' => 'string',
            'xProjectId' => 'string',
            'xUserProfile' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页参数
    * marker  分页参数
    * startTime  创建时间开始
    * endTime  创建时间结束
    * creator  创建人
    * status  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'creator' => null,
        'status' => null,
        'xLanguage' => null,
        'xProjectId' => null,
        'xUserProfile' => null
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
    * limit  分页参数
    * marker  分页参数
    * startTime  创建时间开始
    * endTime  创建时间结束
    * creator  创建人
    * status  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'creator' => 'creator',
            'status' => 'status',
            'xLanguage' => 'X-Language',
            'xProjectId' => 'x-project-id',
            'xUserProfile' => 'x-user-profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页参数
    * marker  分页参数
    * startTime  创建时间开始
    * endTime  创建时间结束
    * creator  创建人
    * status  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'creator' => 'setCreator',
            'status' => 'setStatus',
            'xLanguage' => 'setXLanguage',
            'xProjectId' => 'setXProjectId',
            'xUserProfile' => 'setXUserProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页参数
    * marker  分页参数
    * startTime  创建时间开始
    * endTime  创建时间结束
    * creator  创建人
    * status  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'creator' => 'getCreator',
            'status' => 'getStatus',
            'xLanguage' => 'getXLanguage',
            'xProjectId' => 'getXProjectId',
            'xUserProfile' => 'getXUserProfile'
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
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_ABNORMAL = 'ABNORMAL';
    const STATUS_PAUSED = 'PAUSED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_FINISHED = 'FINISHED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_ABNORMAL,
            self::STATUS_PAUSED,
            self::STATUS_CANCELED,
            self::STATUS_FINISHED,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xUserProfile'] = isset($data['xUserProfile']) ? $data['xUserProfile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'marker', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] < 1)) {
                $invalidProperties[] = "invalid value for 'marker', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 64)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets limit
    *  分页参数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页参数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数
    *
    * @return int|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param int|null $marker 分页参数
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets startTime
    *  创建时间开始
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
    * @param int|null $startTime 创建时间开始
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  创建时间结束
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 创建时间结束
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets status
    *  工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
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
    * @param string|null $status 工单状态 PROCESSING：执行中 ABNORMAL：异常 PAUSED：暂停 CANCELED：已取消 FINISHED：成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets xLanguage
    *  国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，一个项目对应一个region
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，一个项目对应一个region
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xUserProfile
    *  IAM5.0用户信息
    *
    * @return string|null
    */
    public function getXUserProfile()
    {
        return $this->container['xUserProfile'];
    }

    /**
    * Sets xUserProfile
    *
    * @param string|null $xUserProfile IAM5.0用户信息
    *
    * @return $this
    */
    public function setXUserProfile($xUserProfile)
    {
        $this->container['xUserProfile'] = $xUserProfile;
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

