<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeystorePermissionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeystorePermissionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canAbsent  can_absent
    * delete  delete
    * id  id
    * keystoreId  keystore_id
    * modify  modify
    * usage  usage
    * userName  user_name
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canAbsent' => 'bool',
            'delete' => 'bool',
            'id' => 'string',
            'keystoreId' => 'string',
            'modify' => 'bool',
            'usage' => 'bool',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canAbsent  can_absent
    * delete  delete
    * id  id
    * keystoreId  keystore_id
    * modify  modify
    * usage  usage
    * userName  user_name
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canAbsent' => null,
        'delete' => null,
        'id' => null,
        'keystoreId' => null,
        'modify' => null,
        'usage' => null,
        'userName' => null
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
    * canAbsent  can_absent
    * delete  delete
    * id  id
    * keystoreId  keystore_id
    * modify  modify
    * usage  usage
    * userName  user_name
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canAbsent' => 'can_absent',
            'delete' => 'delete',
            'id' => 'id',
            'keystoreId' => 'keystore_id',
            'modify' => 'modify',
            'usage' => 'usage',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canAbsent  can_absent
    * delete  delete
    * id  id
    * keystoreId  keystore_id
    * modify  modify
    * usage  usage
    * userName  user_name
    *
    * @var string[]
    */
    protected static $setters = [
            'canAbsent' => 'setCanAbsent',
            'delete' => 'setDelete',
            'id' => 'setId',
            'keystoreId' => 'setKeystoreId',
            'modify' => 'setModify',
            'usage' => 'setUsage',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canAbsent  can_absent
    * delete  delete
    * id  id
    * keystoreId  keystore_id
    * modify  modify
    * usage  usage
    * userName  user_name
    *
    * @var string[]
    */
    protected static $getters = [
            'canAbsent' => 'getCanAbsent',
            'delete' => 'getDelete',
            'id' => 'getId',
            'keystoreId' => 'getKeystoreId',
            'modify' => 'getModify',
            'usage' => 'getUsage',
            'userName' => 'getUserName'
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
        $this->container['canAbsent'] = isset($data['canAbsent']) ? $data['canAbsent'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
        $this->container['modify'] = isset($data['modify']) ? $data['modify'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delete'] === null) {
            $invalidProperties[] = "'delete' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['keystoreId'] === null) {
            $invalidProperties[] = "'keystoreId' can't be null";
        }
        if ($this->container['modify'] === null) {
            $invalidProperties[] = "'modify' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
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
    * Gets canAbsent
    *  can_absent
    *
    * @return bool|null
    */
    public function getCanAbsent()
    {
        return $this->container['canAbsent'];
    }

    /**
    * Sets canAbsent
    *
    * @param bool|null $canAbsent can_absent
    *
    * @return $this
    */
    public function setCanAbsent($canAbsent)
    {
        $this->container['canAbsent'] = $canAbsent;
        return $this;
    }

    /**
    * Gets delete
    *  delete
    *
    * @return bool
    */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
    * Sets delete
    *
    * @param bool $delete delete
    *
    * @return $this
    */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets keystoreId
    *  keystore_id
    *
    * @return string
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string $keystoreId keystore_id
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets modify
    *  modify
    *
    * @return bool
    */
    public function getModify()
    {
        return $this->container['modify'];
    }

    /**
    * Sets modify
    *
    * @param bool $modify modify
    *
    * @return $this
    */
    public function setModify($modify)
    {
        $this->container['modify'] = $modify;
        return $this;
    }

    /**
    * Gets usage
    *  usage
    *
    * @return bool
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param bool $usage usage
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets userName
    *  user_name
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName user_name
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

