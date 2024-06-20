<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineConcurrencyMgmt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineConcurrencyMgmt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线id
    * concurrencyNumber  并行数量
    * exceedAction  超出情况下策略
    * createTime  创建时间
    * updateTime  更新时间
    * enable  是否有效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'concurrencyNumber' => 'int',
            'exceedAction' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线id
    * concurrencyNumber  并行数量
    * exceedAction  超出情况下策略
    * createTime  创建时间
    * updateTime  更新时间
    * enable  是否有效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'concurrencyNumber' => 'int32',
        'exceedAction' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'enable' => null
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
    * pipelineId  流水线id
    * concurrencyNumber  并行数量
    * exceedAction  超出情况下策略
    * createTime  创建时间
    * updateTime  更新时间
    * enable  是否有效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'concurrencyNumber' => 'concurrency_number',
            'exceedAction' => 'exceed_action',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线id
    * concurrencyNumber  并行数量
    * exceedAction  超出情况下策略
    * createTime  创建时间
    * updateTime  更新时间
    * enable  是否有效
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'concurrencyNumber' => 'setConcurrencyNumber',
            'exceedAction' => 'setExceedAction',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线id
    * concurrencyNumber  并行数量
    * exceedAction  超出情况下策略
    * createTime  创建时间
    * updateTime  更新时间
    * enable  是否有效
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'concurrencyNumber' => 'getConcurrencyNumber',
            'exceedAction' => 'getExceedAction',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'enable' => 'getEnable'
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
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['concurrencyNumber'] = isset($data['concurrencyNumber']) ? $data['concurrencyNumber'] : null;
        $this->container['exceedAction'] = isset($data['exceedAction']) ? $data['exceedAction'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets pipelineId
    *  流水线id
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 流水线id
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets concurrencyNumber
    *  并行数量
    *
    * @return int|null
    */
    public function getConcurrencyNumber()
    {
        return $this->container['concurrencyNumber'];
    }

    /**
    * Sets concurrencyNumber
    *
    * @param int|null $concurrencyNumber 并行数量
    *
    * @return $this
    */
    public function setConcurrencyNumber($concurrencyNumber)
    {
        $this->container['concurrencyNumber'] = $concurrencyNumber;
        return $this;
    }

    /**
    * Gets exceedAction
    *  超出情况下策略
    *
    * @return string|null
    */
    public function getExceedAction()
    {
        return $this->container['exceedAction'];
    }

    /**
    * Sets exceedAction
    *
    * @param string|null $exceedAction 超出情况下策略
    *
    * @return $this
    */
    public function setExceedAction($exceedAction)
    {
        $this->container['exceedAction'] = $exceedAction;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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
    * Gets enable
    *  是否有效
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否有效
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

