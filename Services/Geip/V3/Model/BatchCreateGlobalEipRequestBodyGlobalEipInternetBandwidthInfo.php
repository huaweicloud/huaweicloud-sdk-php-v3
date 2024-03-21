<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateGlobalEipRequestBodyGlobalEipInternetBandwidthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateGlobalEipRequestBody_global_eip_internet_bandwidth_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  全域公网带宽的ID
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * size  全域公网带宽大小（出云方向）
    * name  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * tags  全域弹性公网IP标签
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ingressSize' => 'int',
            'chargeMode' => 'string',
            'size' => 'int',
            'name' => 'string',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  全域公网带宽的ID
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * size  全域公网带宽大小（出云方向）
    * name  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * tags  全域弹性公网IP标签
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ingressSize' => 'int32',
        'chargeMode' => null,
        'size' => 'int32',
        'name' => null,
        'tags' => null,
        'type' => null
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
    * id  全域公网带宽的ID
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * size  全域公网带宽大小（出云方向）
    * name  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * tags  全域弹性公网IP标签
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ingressSize' => 'ingress_size',
            'chargeMode' => 'charge_mode',
            'size' => 'size',
            'name' => 'name',
            'tags' => 'tags',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  全域公网带宽的ID
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * size  全域公网带宽大小（出云方向）
    * name  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * tags  全域弹性公网IP标签
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ingressSize' => 'setIngressSize',
            'chargeMode' => 'setChargeMode',
            'size' => 'setSize',
            'name' => 'setName',
            'tags' => 'setTags',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  全域公网带宽的ID
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * size  全域公网带宽大小（出云方向）
    * name  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * tags  全域弹性公网IP标签
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ingressSize' => 'getIngressSize',
            'chargeMode' => 'getChargeMode',
            'size' => 'getSize',
            'name' => 'getName',
            'tags' => 'getTags',
            'type' => 'getType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ingressSize'] = isset($data['ingressSize']) ? $data['ingressSize'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['ingressSize']) && ($this->container['ingressSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ingressSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ingressSize']) && ($this->container['ingressSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'ingressSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  全域公网带宽的ID
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
    * @param string|null $id 全域公网带宽的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ingressSize
    *  全域公网带宽大小（入云方向）
    *
    * @return int|null
    */
    public function getIngressSize()
    {
        return $this->container['ingressSize'];
    }

    /**
    * Sets ingressSize
    *
    * @param int|null $ingressSize 全域公网带宽大小（入云方向）
    *
    * @return $this
    */
    public function setIngressSize($ingressSize)
    {
        $this->container['ingressSize'] = $ingressSize;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets size
    *  全域公网带宽大小（出云方向）
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 全域公网带宽大小（出云方向）
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets name
    *  - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name - 功能说明：全域弹性公网IP名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tags
    *  全域弹性公网IP标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]|null $tags 全域弹性公网IP标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  全域公网带宽类型
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
    * @param string|null $type 全域公网带宽类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

