<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetScriptJobBatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetScriptJobBatchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchIndex  批次index
    * executeUuid  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    * status  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchIndex' => 'int',
            'executeUuid' => 'string',
            'status' => 'string',
            'limit' => 'int',
            'marker' => 'int',
            'xLanguage' => 'string',
            'xProjectId' => 'string',
            'xUserProfile' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchIndex  批次index
    * executeUuid  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    * status  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchIndex' => 'int32',
        'executeUuid' => null,
        'status' => null,
        'limit' => 'int32',
        'marker' => 'int64',
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
    * batchIndex  批次index
    * executeUuid  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    * status  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchIndex' => 'batch_index',
            'executeUuid' => 'execute_uuid',
            'status' => 'status',
            'limit' => 'limit',
            'marker' => 'marker',
            'xLanguage' => 'X-Language',
            'xProjectId' => 'x-project-id',
            'xUserProfile' => 'x-user-profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchIndex  批次index
    * executeUuid  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    * status  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $setters = [
            'batchIndex' => 'setBatchIndex',
            'executeUuid' => 'setExecuteUuid',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'xLanguage' => 'setXLanguage',
            'xProjectId' => 'setXProjectId',
            'xUserProfile' => 'setXUserProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchIndex  批次index
    * executeUuid  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    * status  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    * limit  分页参数：每页返回记录个数限制
    * marker  分页参数：上一页最后一个记录id
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    *
    * @var string[]
    */
    protected static $getters = [
            'batchIndex' => 'getBatchIndex',
            'executeUuid' => 'getExecuteUuid',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
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
    const STATUS_READY = 'READY';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_ABNORMAL = 'ABNORMAL';
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
            self::STATUS_READY,
            self::STATUS_PROCESSING,
            self::STATUS_ABNORMAL,
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
        $this->container['batchIndex'] = isset($data['batchIndex']) ? $data['batchIndex'] : null;
        $this->container['executeUuid'] = isset($data['executeUuid']) ? $data['executeUuid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
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
        if ($this->container['batchIndex'] === null) {
            $invalidProperties[] = "'batchIndex' can't be null";
        }
            if (($this->container['batchIndex'] > 20)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be smaller than or equal to 20.";
            }
            if (($this->container['batchIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be bigger than or equal to 1.";
            }
        if ($this->container['executeUuid'] === null) {
            $invalidProperties[] = "'executeUuid' can't be null";
        }
            if ((mb_strlen($this->container['executeUuid']) > 26)) {
                $invalidProperties[] = "invalid value for 'executeUuid', the character length must be smaller than or equal to 26.";
            }
            if ((mb_strlen($this->container['executeUuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'executeUuid', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 50)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 50.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'marker', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['marker']) && ($this->container['marker'] < 0)) {
                $invalidProperties[] = "invalid value for 'marker', must be bigger than or equal to 0.";
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
    * Gets batchIndex
    *  批次index
    *
    * @return int
    */
    public function getBatchIndex()
    {
        return $this->container['batchIndex'];
    }

    /**
    * Sets batchIndex
    *
    * @param int $batchIndex 批次index
    *
    * @return $this
    */
    public function setBatchIndex($batchIndex)
    {
        $this->container['batchIndex'] = $batchIndex;
        return $this;
    }

    /**
    * Gets executeUuid
    *  脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    *
    * @return string
    */
    public function getExecuteUuid()
    {
        return $this->container['executeUuid'];
    }

    /**
    * Sets executeUuid
    *
    * @param string $executeUuid 脚本工单的执行Id，取自executeJobScript和ListJobScriptOrders返回体中
    *
    * @return $this
    */
    public function setExecuteUuid($executeUuid)
    {
        $this->container['executeUuid'] = $executeUuid;
        return $this;
    }

    /**
    * Gets status
    *  实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
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
    * @param string|null $status 实例执行状态 READY：待执行 PROCESSING：执行中 ABNORMAL：异常 CANCELED：已取消 FINISHED：成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数：每页返回记录个数限制
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页参数：每页返回记录个数限制
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
    *  分页参数：上一页最后一个记录id
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
    * @param int|null $marker 分页参数：上一页最后一个记录id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

