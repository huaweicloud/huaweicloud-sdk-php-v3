<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandWidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandWidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  带宽名称
    * sharetype  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    * id  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    * size  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    * chargemode  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sharetype' => 'string',
            'id' => 'string',
            'size' => 'int',
            'chargemode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  带宽名称
    * sharetype  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    * id  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    * size  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    * chargemode  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sharetype' => null,
        'id' => 'uuid',
        'size' => 'int32',
        'chargemode' => null
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
    * name  带宽名称
    * sharetype  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    * id  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    * size  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    * chargemode  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sharetype' => 'sharetype',
            'id' => 'id',
            'size' => 'size',
            'chargemode' => 'chargemode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  带宽名称
    * sharetype  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    * id  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    * size  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    * chargemode  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sharetype' => 'setSharetype',
            'id' => 'setId',
            'size' => 'setSize',
            'chargemode' => 'setChargemode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  带宽名称
    * sharetype  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    * id  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    * size  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    * chargemode  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sharetype' => 'getSharetype',
            'id' => 'getId',
            'size' => 'getSize',
            'chargemode' => 'getChargemode'
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
    const SHARETYPE_PER = 'PER';
    const SHARETYPE_WHOLE = 'WHOLE';
    const CHARGEMODE_TRAFFIC = 'traffic';
    const CHARGEMODE_BANDWIDTH = 'bandwidth';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharetypeAllowableValues()
    {
        return [
            self::SHARETYPE_PER,
            self::SHARETYPE_WHOLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargemodeAllowableValues()
    {
        return [
            self::CHARGEMODE_TRAFFIC,
            self::CHARGEMODE_BANDWIDTH,
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
        $this->container['sharetype'] = isset($data['sharetype']) ? $data['sharetype'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargemode'] = isset($data['chargemode']) ? $data['chargemode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sharetype'] === null) {
            $invalidProperties[] = "'sharetype' can't be null";
        }
            $allowedValues = $this->getSharetypeAllowableValues();
                if (!is_null($this->container['sharetype']) && !in_array($this->container['sharetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            $allowedValues = $this->getChargemodeAllowableValues();
                if (!is_null($this->container['chargemode']) && !in_array($this->container['chargemode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargemode', must be one of '%s'",
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
    *  带宽名称
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
    * @param string|null $name 带宽名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sharetype
    *  带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    *
    * @return string
    */
    public function getSharetype()
    {
        return $this->container['sharetype'];
    }

    /**
    * Sets sharetype
    *
    * @param string $sharetype 带宽的共享类型。共享类型枚举：PER，表示独享；WHOLE，表示共享
    *
    * @return $this
    */
    public function setSharetype($sharetype)
    {
        $this->container['sharetype'] = $sharetype;
        return $this;
    }

    /**
    * Gets id
    *  共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
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
    * @param string|null $id 共享带宽ID。创建WHOLE类型带宽的弹性公网IP时可以指定之前的共享带宽创建。共享带宽的使用限制请参见“共享带宽简介”。 说明：当创建WHOLE类型的带宽时，该字段必选。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets size
    *  取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 取值范围：默认5Mbit/s~2000Mbit/s（具体范围以各Region配置为准，请参见管理控制台对应页面显示）。功能说明：带宽大小。共享带宽的大小有最小值限制，默认为5M。 说明：如果传入的参数为小数（如10.2）或者字符类型（如10），会自动强制转换为整数。带宽小于300Mbit/s时，步长支持1Mbit/s；带宽为300Mbit/s~1000Mbit/s时，步长支持50Mbit/s；带宽为1000Mbit/s~2000Mbit/s时，步长支持1000Mbit/s。如果sharetype是PER，该参数必选；如果sharetype是WHOLE并且id有值，该参数会忽略。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargemode
    *  带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @return string|null
    */
    public function getChargemode()
    {
        return $this->container['chargemode'];
    }

    /**
    * Sets chargemode
    *
    * @param string|null $chargemode 带宽的计费类型。取值为：traffic（按流量计费）、bandwidth（按带宽计费）未传该字段，表示按带宽计费。字段值为空，表示按带宽计费。 说明：如果sharetype是WHOLE并且id有值，仅支持按带宽计费，该参数会忽略。
    *
    * @return $this
    */
    public function setChargemode($chargemode)
    {
        $this->container['chargemode'] = $chargemode;
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

