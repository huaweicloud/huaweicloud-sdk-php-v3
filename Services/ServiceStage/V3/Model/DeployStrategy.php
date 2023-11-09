<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  type
    * rollingRelease  rollingRelease
    * grayRelease  grayRelease
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'rollingRelease' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyRollingRelease',
            'grayRelease' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayRelease'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  type
    * rollingRelease  rollingRelease
    * grayRelease  grayRelease
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'rollingRelease' => null,
        'grayRelease' => null
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
    * type  type
    * rollingRelease  rollingRelease
    * grayRelease  grayRelease
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'rollingRelease' => 'rolling_release',
            'grayRelease' => 'gray_release'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  type
    * rollingRelease  rollingRelease
    * grayRelease  grayRelease
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'rollingRelease' => 'setRollingRelease',
            'grayRelease' => 'setGrayRelease'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  type
    * rollingRelease  rollingRelease
    * grayRelease  grayRelease
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'rollingRelease' => 'getRollingRelease',
            'grayRelease' => 'getGrayRelease'
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
    const TYPE_ONE_BATCH_RELEASE = 'OneBatchRelease';
    const TYPE_ROLLING_RELEASE = 'RollingRelease';
    const TYPE_GRAY_RELEASE = 'GrayRelease';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ONE_BATCH_RELEASE,
            self::TYPE_ROLLING_RELEASE,
            self::TYPE_GRAY_RELEASE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rollingRelease'] = isset($data['rollingRelease']) ? $data['rollingRelease'] : null;
        $this->container['grayRelease'] = isset($data['grayRelease']) ? $data['grayRelease'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets type
    *  type
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
    * @param string $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets rollingRelease
    *  rollingRelease
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyRollingRelease|null
    */
    public function getRollingRelease()
    {
        return $this->container['rollingRelease'];
    }

    /**
    * Sets rollingRelease
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyRollingRelease|null $rollingRelease rollingRelease
    *
    * @return $this
    */
    public function setRollingRelease($rollingRelease)
    {
        $this->container['rollingRelease'] = $rollingRelease;
        return $this;
    }

    /**
    * Gets grayRelease
    *  grayRelease
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayRelease|null
    */
    public function getGrayRelease()
    {
        return $this->container['grayRelease'];
    }

    /**
    * Sets grayRelease
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayRelease|null $grayRelease grayRelease
    *
    * @return $this
    */
    public function setGrayRelease($grayRelease)
    {
        $this->container['grayRelease'] = $grayRelease;
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

