<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigInfoDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigInfoDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  部署参数名称，用户可自定义
    * type  类型，如果填写name字段，则type必选,若type为空则默认为text
    * description  描述
    * value  部署参数值
    * taskId  部署任务id，创建应用后由系统自动生成
    * staticStatus  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    * limits  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'value' => 'string',
            'taskId' => 'string',
            'staticStatus' => 'int',
            'limits' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ParamTypeLimits[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  部署参数名称，用户可自定义
    * type  类型，如果填写name字段，则type必选,若type为空则默认为text
    * description  描述
    * value  部署参数值
    * taskId  部署任务id，创建应用后由系统自动生成
    * staticStatus  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    * limits  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'description' => null,
        'value' => null,
        'taskId' => null,
        'staticStatus' => 'int32',
        'limits' => null
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
    * name  部署参数名称，用户可自定义
    * type  类型，如果填写name字段，则type必选,若type为空则默认为text
    * description  描述
    * value  部署参数值
    * taskId  部署任务id，创建应用后由系统自动生成
    * staticStatus  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    * limits  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'value' => 'value',
            'taskId' => 'task_id',
            'staticStatus' => 'static_status',
            'limits' => 'limits'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  部署参数名称，用户可自定义
    * type  类型，如果填写name字段，则type必选,若type为空则默认为text
    * description  描述
    * value  部署参数值
    * taskId  部署任务id，创建应用后由系统自动生成
    * staticStatus  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    * limits  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'value' => 'setValue',
            'taskId' => 'setTaskId',
            'staticStatus' => 'setStaticStatus',
            'limits' => 'setLimits'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  部署参数名称，用户可自定义
    * type  类型，如果填写name字段，则type必选,若type为空则默认为text
    * description  描述
    * value  部署参数值
    * taskId  部署任务id，创建应用后由系统自动生成
    * staticStatus  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    * limits  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'value' => 'getValue',
            'taskId' => 'getTaskId',
            'staticStatus' => 'getStaticStatus',
            'limits' => 'getLimits'
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
    const TYPE_TEXT = 'text';
    const TYPE_HOST_GROUP = 'host_group';
    const TYPE_ENUM = 'enum';
    const TYPE_ENCRYPT = 'encrypt';
    const STATIC_STATUS_0 = 0;
    const STATIC_STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_HOST_GROUP,
            self::TYPE_ENUM,
            self::TYPE_ENCRYPT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStaticStatusAllowableValues()
    {
        return [
            self::STATIC_STATUS_0,
            self::STATIC_STATUS_1,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['staticStatus'] = isset($data['staticStatus']) ? $data['staticStatus'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            $allowedValues = $this->getStaticStatusAllowableValues();
                if (!is_null($this->container['staticStatus']) && !in_array($this->container['staticStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'staticStatus', must be one of '%s'",
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
    * Gets name
    *  部署参数名称，用户可自定义
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 部署参数名称，用户可自定义
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  类型，如果填写name字段，则type必选,若type为空则默认为text
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型，如果填写name字段，则type必选,若type为空则默认为text
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets value
    *  部署参数值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 部署参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets taskId
    *  部署任务id，创建应用后由系统自动生成
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 部署任务id，创建应用后由系统自动生成
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets staticStatus
    *  表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    *
    * @return int|null
    */
    public function getStaticStatus()
    {
        return $this->container['staticStatus'];
    }

    /**
    * Sets staticStatus
    *
    * @param int|null $staticStatus 表示是否为静态参数，值为1时不支持部署时变更参数，值为0时支持，并且也会把该参数上报流水线
    *
    * @return $this
    */
    public function setStaticStatus($staticStatus)
    {
        $this->container['staticStatus'] = $staticStatus;
        return $this;
    }

    /**
    * Gets limits
    *  当参数类型为enum枚举类型时，必须填写可选值
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ParamTypeLimits[]|null
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\ParamTypeLimits[]|null $limits 当参数类型为enum枚举类型时，必须填写可选值
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
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

