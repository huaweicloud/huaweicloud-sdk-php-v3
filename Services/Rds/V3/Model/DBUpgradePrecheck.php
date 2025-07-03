<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DBUpgradePrecheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DBUpgradePrecheck';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  检查是否通过，0代表通过，1代表未通过
    * checksPerformed  检查项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'int',
            'checksPerformed' => '\HuaweiCloud\SDK\Rds\V3\Model\DBCheckDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  检查是否通过，0代表通过，1代表未通过
    * checksPerformed  检查项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'checksPerformed' => null
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
    * result  检查是否通过，0代表通过，1代表未通过
    * checksPerformed  检查项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'checksPerformed' => 'checks_performed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  检查是否通过，0代表通过，1代表未通过
    * checksPerformed  检查项
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'checksPerformed' => 'setChecksPerformed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  检查是否通过，0代表通过，1代表未通过
    * checksPerformed  检查项
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'checksPerformed' => 'getChecksPerformed'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['checksPerformed'] = isset($data['checksPerformed']) ? $data['checksPerformed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['result']) && ($this->container['result'] > 10)) {
                $invalidProperties[] = "invalid value for 'result', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['result']) && ($this->container['result'] < 1)) {
                $invalidProperties[] = "invalid value for 'result', must be bigger than or equal to 1.";
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
    * Gets result
    *  检查是否通过，0代表通过，1代表未通过
    *
    * @return int|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param int|null $result 检查是否通过，0代表通过，1代表未通过
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets checksPerformed
    *  检查项
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DBCheckDetail[]|null
    */
    public function getChecksPerformed()
    {
        return $this->container['checksPerformed'];
    }

    /**
    * Sets checksPerformed
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DBCheckDetail[]|null $checksPerformed 检查项
    *
    * @return $this
    */
    public function setChecksPerformed($checksPerformed)
    {
        $this->container['checksPerformed'] = $checksPerformed;
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

