<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportOtherResourceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportOtherResourceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * file  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    * type  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'file' => '\SplFileObject',
            'type' => 'string',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * file  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    * type  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'file' => 'binary',
        'type' => null,
        'regionId' => null
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
    * file  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    * type  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'file' => 'file',
            'type' => 'type',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * file  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    * type  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'file' => 'setFile',
            'type' => 'setType',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * file  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    * type  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'file' => 'getFile',
            'type' => 'getType',
            'regionId' => 'getRegionId'
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
    const TYPE_PM = 'PM';
    const TYPE_VM = 'VM';
    const TYPE_MIDDLEWARE = 'Middleware';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PM,
            self::TYPE_VM,
            self::TYPE_MIDDLEWARE,
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
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
    * Gets file
    *  **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file **参数解释：** 上传的物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **约束限制：** 不涉及。 **取值范围：** 物理机/虚拟机/中间件设备下载模板excel（相关的设备信息）。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 导入类型。 **约束限制：** 不涉及。 **取值范围：** - vm：虚拟机。 - PM：物理机。 - Middleware：中间件设备。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在[0,64]之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

