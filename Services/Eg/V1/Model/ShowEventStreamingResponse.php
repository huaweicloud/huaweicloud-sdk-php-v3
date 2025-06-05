<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventStreamingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventStreamingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件流描述
    * source  source
    * sink  sink
    * ruleConfig  ruleConfig
    * option  option
    * status  事件流状态
    * id  事件流ID
    * createdTime  创建时间
    * updatedTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'source' => '\HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSource',
            'sink' => '\HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSink',
            'ruleConfig' => '\HuaweiCloud\SDK\Eg\V1\Model\EventStreamingCreateReqRuleConfig',
            'option' => '\HuaweiCloud\SDK\Eg\V1\Model\RunOption',
            'status' => 'string',
            'id' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件流描述
    * source  source
    * sink  sink
    * ruleConfig  ruleConfig
    * option  option
    * status  事件流状态
    * id  事件流ID
    * createdTime  创建时间
    * updatedTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'source' => null,
        'sink' => null,
        'ruleConfig' => null,
        'option' => null,
        'status' => null,
        'id' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'xRequestId' => null
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
    * name  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件流描述
    * source  source
    * sink  sink
    * ruleConfig  ruleConfig
    * option  option
    * status  事件流状态
    * id  事件流ID
    * createdTime  创建时间
    * updatedTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'source' => 'source',
            'sink' => 'sink',
            'ruleConfig' => 'rule_config',
            'option' => 'option',
            'status' => 'status',
            'id' => 'id',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件流描述
    * source  source
    * sink  sink
    * ruleConfig  ruleConfig
    * option  option
    * status  事件流状态
    * id  事件流ID
    * createdTime  创建时间
    * updatedTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'source' => 'setSource',
            'sink' => 'setSink',
            'ruleConfig' => 'setRuleConfig',
            'option' => 'setOption',
            'status' => 'setStatus',
            'id' => 'setId',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件流描述
    * source  source
    * sink  sink
    * ruleConfig  ruleConfig
    * option  option
    * status  事件流状态
    * id  事件流ID
    * createdTime  创建时间
    * updatedTime  更新时间
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'source' => 'getSource',
            'sink' => 'getSink',
            'ruleConfig' => 'getRuleConfig',
            'option' => 'getOption',
            'status' => 'getStatus',
            'id' => 'getId',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'xRequestId' => 'getXRequestId'
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
    const STATUS_CREATED = 'CREATED';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_STOPPED = 'STOPPED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_RUNNING,
            self::STATUS_ERROR,
            self::STATUS_STOPPED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sink'] = isset($data['sink']) ? $data['sink'] : null;
        $this->container['ruleConfig'] = isset($data['ruleConfig']) ? $data['ruleConfig'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['sink'] === null) {
            $invalidProperties[] = "'sink' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 事件流名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  事件流描述
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
    * @param string|null $description 事件流描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSource
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSource $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sink
    *  sink
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSink
    */
    public function getSink()
    {
        return $this->container['sink'];
    }

    /**
    * Sets sink
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingSink $sink sink
    *
    * @return $this
    */
    public function setSink($sink)
    {
        $this->container['sink'] = $sink;
        return $this;
    }

    /**
    * Gets ruleConfig
    *  ruleConfig
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingCreateReqRuleConfig|null
    */
    public function getRuleConfig()
    {
        return $this->container['ruleConfig'];
    }

    /**
    * Sets ruleConfig
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\EventStreamingCreateReqRuleConfig|null $ruleConfig ruleConfig
    *
    * @return $this
    */
    public function setRuleConfig($ruleConfig)
    {
        $this->container['ruleConfig'] = $ruleConfig;
        return $this;
    }

    /**
    * Gets option
    *  option
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\RunOption|null
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\RunOption|null $option option
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
        return $this;
    }

    /**
    * Gets status
    *  事件流状态
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
    * @param string|null $status 事件流状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  事件流ID
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
    * @param string|null $id 事件流ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

