<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutVolumeGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutVolumeGroups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalVolumes  lv信息
    * id  卷组ID
    * needMigration  是否迁移
    * adjustSize  调整大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\PutLogicalVolume[]',
            'id' => 'string',
            'needMigration' => 'bool',
            'adjustSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalVolumes  lv信息
    * id  卷组ID
    * needMigration  是否迁移
    * adjustSize  调整大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalVolumes' => null,
        'id' => null,
        'needMigration' => null,
        'adjustSize' => 'int64'
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
    * logicalVolumes  lv信息
    * id  卷组ID
    * needMigration  是否迁移
    * adjustSize  调整大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalVolumes' => 'logical_volumes',
            'id' => 'id',
            'needMigration' => 'need_migration',
            'adjustSize' => 'adjust_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalVolumes  lv信息
    * id  卷组ID
    * needMigration  是否迁移
    * adjustSize  调整大小
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalVolumes' => 'setLogicalVolumes',
            'id' => 'setId',
            'needMigration' => 'setNeedMigration',
            'adjustSize' => 'setAdjustSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalVolumes  lv信息
    * id  卷组ID
    * needMigration  是否迁移
    * adjustSize  调整大小
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalVolumes' => 'getLogicalVolumes',
            'id' => 'getId',
            'needMigration' => 'getNeedMigration',
            'adjustSize' => 'getAdjustSize'
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
        $this->container['logicalVolumes'] = isset($data['logicalVolumes']) ? $data['logicalVolumes'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['needMigration'] = isset($data['needMigration']) ? $data['needMigration'] : null;
        $this->container['adjustSize'] = isset($data['adjustSize']) ? $data['adjustSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adjustSize']) && ($this->container['adjustSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'adjustSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['adjustSize']) && ($this->container['adjustSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'adjustSize', must be bigger than or equal to 0.";
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
    * Gets logicalVolumes
    *  lv信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PutLogicalVolume[]|null
    */
    public function getLogicalVolumes()
    {
        return $this->container['logicalVolumes'];
    }

    /**
    * Sets logicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PutLogicalVolume[]|null $logicalVolumes lv信息
    *
    * @return $this
    */
    public function setLogicalVolumes($logicalVolumes)
    {
        $this->container['logicalVolumes'] = $logicalVolumes;
        return $this;
    }

    /**
    * Gets id
    *  卷组ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 卷组ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets needMigration
    *  是否迁移
    *
    * @return bool|null
    */
    public function getNeedMigration()
    {
        return $this->container['needMigration'];
    }

    /**
    * Sets needMigration
    *
    * @param bool|null $needMigration 是否迁移
    *
    * @return $this
    */
    public function setNeedMigration($needMigration)
    {
        $this->container['needMigration'] = $needMigration;
        return $this;
    }

    /**
    * Gets adjustSize
    *  调整大小
    *
    * @return int|null
    */
    public function getAdjustSize()
    {
        return $this->container['adjustSize'];
    }

    /**
    * Sets adjustSize
    *
    * @param int|null $adjustSize 调整大小
    *
    * @return $this
    */
    public function setAdjustSize($adjustSize)
    {
        $this->container['adjustSize'] = $adjustSize;
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

