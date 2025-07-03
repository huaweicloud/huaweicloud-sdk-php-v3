<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateBlockDeviceMappingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateBlockDeviceMappingOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceId  虚拟机卷数据源类型：blank, image_id
    * sourceType  卷设备源头类型
    * encrypted  是否加密
    * cmkId  秘钥ID
    * volumeType  卷类型
    * volumeSize  卷大小
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceId' => 'string',
            'sourceType' => 'string',
            'encrypted' => 'bool',
            'cmkId' => 'string',
            'volumeType' => 'string',
            'volumeSize' => 'int',
            'attachment' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingAttachmentOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceId  虚拟机卷数据源类型：blank, image_id
    * sourceType  卷设备源头类型
    * encrypted  是否加密
    * cmkId  秘钥ID
    * volumeType  卷类型
    * volumeSize  卷大小
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceId' => null,
        'sourceType' => null,
        'encrypted' => null,
        'cmkId' => null,
        'volumeType' => null,
        'volumeSize' => null,
        'attachment' => null
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
    * sourceId  虚拟机卷数据源类型：blank, image_id
    * sourceType  卷设备源头类型
    * encrypted  是否加密
    * cmkId  秘钥ID
    * volumeType  卷类型
    * volumeSize  卷大小
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceId' => 'source_id',
            'sourceType' => 'source_type',
            'encrypted' => 'encrypted',
            'cmkId' => 'cmk_id',
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size',
            'attachment' => 'attachment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceId  虚拟机卷数据源类型：blank, image_id
    * sourceType  卷设备源头类型
    * encrypted  是否加密
    * cmkId  秘钥ID
    * volumeType  卷类型
    * volumeSize  卷大小
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceId' => 'setSourceId',
            'sourceType' => 'setSourceType',
            'encrypted' => 'setEncrypted',
            'cmkId' => 'setCmkId',
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize',
            'attachment' => 'setAttachment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceId  虚拟机卷数据源类型：blank, image_id
    * sourceType  卷设备源头类型
    * encrypted  是否加密
    * cmkId  秘钥ID
    * volumeType  卷类型
    * volumeSize  卷大小
    * attachment  attachment
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceId' => 'getSourceId',
            'sourceType' => 'getSourceType',
            'encrypted' => 'getEncrypted',
            'cmkId' => 'getCmkId',
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize',
            'attachment' => 'getAttachment'
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
    const SOURCE_TYPE_BLANK = 'blank';
    const SOURCE_TYPE_IMAGE = 'image';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_BLANK,
            self::SOURCE_TYPE_IMAGE,
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['cmkId'] = isset($data['cmkId']) ? $data['cmkId'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
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
    * Gets sourceId
    *  虚拟机卷数据源类型：blank, image_id
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 虚拟机卷数据源类型：blank, image_id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceType
    *  卷设备源头类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 卷设备源头类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets encrypted
    *  是否加密
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 是否加密
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets cmkId
    *  秘钥ID
    *
    * @return string|null
    */
    public function getCmkId()
    {
        return $this->container['cmkId'];
    }

    /**
    * Sets cmkId
    *
    * @param string|null $cmkId 秘钥ID
    *
    * @return $this
    */
    public function setCmkId($cmkId)
    {
        $this->container['cmkId'] = $cmkId;
        return $this;
    }

    /**
    * Gets volumeType
    *  卷类型
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 卷类型
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeSize
    *  卷大小
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 卷大小
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets attachment
    *  attachment
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingAttachmentOption|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateBlockDeviceMappingAttachmentOption|null $attachment attachment
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
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

