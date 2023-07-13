<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvExecutionBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvExecutionBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * params  部署应用时传递的参数
    * recordId  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    * triggerSource  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'params' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DynamicConfigInfo[]',
            'recordId' => 'string',
            'triggerSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * params  部署应用时传递的参数
    * recordId  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    * triggerSource  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'params' => null,
        'recordId' => null,
        'triggerSource' => null
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
    * params  部署应用时传递的参数
    * recordId  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    * triggerSource  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'params' => 'params',
            'recordId' => 'record_id',
            'triggerSource' => 'trigger_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * params  部署应用时传递的参数
    * recordId  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    * triggerSource  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @var string[]
    */
    protected static $setters = [
            'params' => 'setParams',
            'recordId' => 'setRecordId',
            'triggerSource' => 'setTriggerSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * params  部署应用时传递的参数
    * recordId  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    * triggerSource  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @var string[]
    */
    protected static $getters = [
            'params' => 'getParams',
            'recordId' => 'getRecordId',
            'triggerSource' => 'getTriggerSource'
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
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['triggerSource'] = isset($data['triggerSource']) ? $data['triggerSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordId']) && !preg_match("/[A-Za-z0-9]{1,32}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['triggerSource']) && !preg_match("/^(0|1)$/", $this->container['triggerSource'])) {
                $invalidProperties[] = "invalid value for 'triggerSource', must be conform to the pattern /^(0|1)$/.";
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
    * Gets params
    *  部署应用时传递的参数
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DynamicConfigInfo[]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DynamicConfigInfo[]|null $params 部署应用时传递的参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets recordId
    *  应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 应用的部署id，可通过record_id回滚至之前的部署状态。选中应用历史部署记录，在URL中获取
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets triggerSource
    *  限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @return string|null
    */
    public function getTriggerSource()
    {
        return $this->container['triggerSource'];
    }

    /**
    * Sets triggerSource
    *
    * @param string|null $triggerSource 限制触发来源,0不限制任何部署请求来源,1时只允许通过流水线触发部署
    *
    * @return $this
    */
    public function setTriggerSource($triggerSource)
    {
        $this->container['triggerSource'] = $triggerSource;
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

