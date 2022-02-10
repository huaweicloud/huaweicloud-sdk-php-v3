<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnterprisePersonNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnterprisePersonNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * legelName  法人姓名。
    * legelIdNumber  法人身份证号。
    * certifierRole  认证人角色。 legalPerson ：法人代表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'legelName' => 'string',
            'legelIdNumber' => 'string',
            'certifierRole' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * legelName  法人姓名。
    * legelIdNumber  法人身份证号。
    * certifierRole  认证人角色。 legalPerson ：法人代表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'legelName' => null,
        'legelIdNumber' => null,
        'certifierRole' => null
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
    * legelName  法人姓名。
    * legelIdNumber  法人身份证号。
    * certifierRole  认证人角色。 legalPerson ：法人代表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'legelName' => 'legel_name',
            'legelIdNumber' => 'legel_id_number',
            'certifierRole' => 'certifier_role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * legelName  法人姓名。
    * legelIdNumber  法人身份证号。
    * certifierRole  认证人角色。 legalPerson ：法人代表。
    *
    * @var string[]
    */
    protected static $setters = [
            'legelName' => 'setLegelName',
            'legelIdNumber' => 'setLegelIdNumber',
            'certifierRole' => 'setCertifierRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * legelName  法人姓名。
    * legelIdNumber  法人身份证号。
    * certifierRole  认证人角色。 legalPerson ：法人代表。
    *
    * @var string[]
    */
    protected static $getters = [
            'legelName' => 'getLegelName',
            'legelIdNumber' => 'getLegelIdNumber',
            'certifierRole' => 'getCertifierRole'
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
        $this->container['legelName'] = isset($data['legelName']) ? $data['legelName'] : null;
        $this->container['legelIdNumber'] = isset($data['legelIdNumber']) ? $data['legelIdNumber'] : null;
        $this->container['certifierRole'] = isset($data['certifierRole']) ? $data['certifierRole'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['legelName'] === null) {
            $invalidProperties[] = "'legelName' can't be null";
        }
            if ((mb_strlen($this->container['legelName']) > 256)) {
                $invalidProperties[] = "invalid value for 'legelName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['legelName']) < 1)) {
                $invalidProperties[] = "invalid value for 'legelName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['legelIdNumber'] === null) {
            $invalidProperties[] = "'legelIdNumber' can't be null";
        }
            if ((mb_strlen($this->container['legelIdNumber']) > 32)) {
                $invalidProperties[] = "invalid value for 'legelIdNumber', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['legelIdNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'legelIdNumber', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certifierRole']) && (mb_strlen($this->container['certifierRole']) > 32)) {
                $invalidProperties[] = "invalid value for 'certifierRole', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['certifierRole']) && (mb_strlen($this->container['certifierRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'certifierRole', the character length must be bigger than or equal to 0.";
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
    * Gets legelName
    *  法人姓名。
    *
    * @return string
    */
    public function getLegelName()
    {
        return $this->container['legelName'];
    }

    /**
    * Sets legelName
    *
    * @param string $legelName 法人姓名。
    *
    * @return $this
    */
    public function setLegelName($legelName)
    {
        $this->container['legelName'] = $legelName;
        return $this;
    }

    /**
    * Gets legelIdNumber
    *  法人身份证号。
    *
    * @return string
    */
    public function getLegelIdNumber()
    {
        return $this->container['legelIdNumber'];
    }

    /**
    * Sets legelIdNumber
    *
    * @param string $legelIdNumber 法人身份证号。
    *
    * @return $this
    */
    public function setLegelIdNumber($legelIdNumber)
    {
        $this->container['legelIdNumber'] = $legelIdNumber;
        return $this;
    }

    /**
    * Gets certifierRole
    *  认证人角色。 legalPerson ：法人代表。
    *
    * @return string|null
    */
    public function getCertifierRole()
    {
        return $this->container['certifierRole'];
    }

    /**
    * Sets certifierRole
    *
    * @param string|null $certifierRole 认证人角色。 legalPerson ：法人代表。
    *
    * @return $this
    */
    public function setCertifierRole($certifierRole)
    {
        $this->container['certifierRole'] = $certifierRole;
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

