<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListEdgeAppVersionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListEdgeAppVersionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用版本,应用内版本唯一。
    * version  应用版本搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * aiCardType  ai加速卡类型
    * arch  支持架构
    * state  应用版本状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'version' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'aiCardType' => 'string',
            'arch' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用版本,应用内版本唯一。
    * version  应用版本搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * aiCardType  ai加速卡类型
    * arch  支持架构
    * state  应用版本状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'version' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'aiCardType' => null,
        'arch' => null,
        'state' => null
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
    * edgeAppId  应用版本,应用内版本唯一。
    * version  应用版本搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * aiCardType  ai加速卡类型
    * arch  支持架构
    * state  应用版本状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'version' => 'version',
            'offset' => 'offset',
            'limit' => 'limit',
            'aiCardType' => 'ai_card_type',
            'arch' => 'arch',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用版本,应用内版本唯一。
    * version  应用版本搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * aiCardType  ai加速卡类型
    * arch  支持架构
    * state  应用版本状态
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'version' => 'setVersion',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'aiCardType' => 'setAiCardType',
            'arch' => 'setArch',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用版本,应用内版本唯一。
    * version  应用版本搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * aiCardType  ai加速卡类型
    * arch  支持架构
    * state  应用版本状态
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'version' => 'getVersion',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'aiCardType' => 'getAiCardType',
            'arch' => 'getArch',
            'state' => 'getState'
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
    const AI_CARD_TYPE_GPU = 'GPU';
    const AI_CARD_TYPE_NPU = 'NPU';
    const AI_CARD_TYPE_UN_EQUIPPED = 'unEquipped';
    const ARCH_X86_64 = 'x86_64';
    const ARCH_ARM32 = 'arm32';
    const ARCH_ARM64 = 'arm64';
    const STATE_DRAFT = 'DRAFT';
    const STATE_PUBLISHED = 'PUBLISHED';
    const STATE_OFF_SHELF = 'OFF_SHELF';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAiCardTypeAllowableValues()
    {
        return [
            self::AI_CARD_TYPE_GPU,
            self::AI_CARD_TYPE_NPU,
            self::AI_CARD_TYPE_UN_EQUIPPED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_X86_64,
            self::ARCH_ARM32,
            self::ARCH_ARM64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_PUBLISHED,
            self::STATE_OFF_SHELF,
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['aiCardType'] = isset($data['aiCardType']) ? $data['aiCardType'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgeAppId'] === null) {
            $invalidProperties[] = "'edgeAppId' can't be null";
        }
            if ((mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['edgeAppId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAiCardTypeAllowableValues();
                if (!is_null($this->container['aiCardType']) && !in_array($this->container['aiCardType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'aiCardType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aiCardType']) && (mb_strlen($this->container['aiCardType']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiCardType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) > 64)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) < 0)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
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
    * Gets edgeAppId
    *  应用版本,应用内版本唯一。
    *
    * @return string
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string $edgeAppId 应用版本,应用内版本唯一。
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets version
    *  应用版本搜索关键字
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 应用版本搜索关键字
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets offset
    *  查询的起始位置，取值范围为非负整数，默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询的起始位置，取值范围为非负整数，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数，默认值为10，取值区间为1-1000
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
    * @param int|null $limit 每页记录数，默认值为10，取值区间为1-1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets aiCardType
    *  ai加速卡类型
    *
    * @return string|null
    */
    public function getAiCardType()
    {
        return $this->container['aiCardType'];
    }

    /**
    * Sets aiCardType
    *
    * @param string|null $aiCardType ai加速卡类型
    *
    * @return $this
    */
    public function setAiCardType($aiCardType)
    {
        $this->container['aiCardType'] = $aiCardType;
        return $this;
    }

    /**
    * Gets arch
    *  支持架构
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 支持架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets state
    *  应用版本状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 应用版本状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

