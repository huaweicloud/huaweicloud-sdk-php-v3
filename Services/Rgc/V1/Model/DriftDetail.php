<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DriftDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DriftDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedAccountId  管理员账号ID。
    * driftType  漂移类型。
    * driftTargetId  漂移发生的纳管账号ID或注册OU ID。
    * driftTargetType  漂移目标类型，类型有account、ou和policy。
    * driftMessage  漂移信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * solveSolution  漂移修复方法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedAccountId' => 'string',
            'driftType' => 'string',
            'driftTargetId' => 'string',
            'driftTargetType' => 'string',
            'driftMessage' => 'string',
            'parentOrganizationalUnitId' => 'string',
            'solveSolution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedAccountId  管理员账号ID。
    * driftType  漂移类型。
    * driftTargetId  漂移发生的纳管账号ID或注册OU ID。
    * driftTargetType  漂移目标类型，类型有account、ou和policy。
    * driftMessage  漂移信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * solveSolution  漂移修复方法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedAccountId' => null,
        'driftType' => null,
        'driftTargetId' => null,
        'driftTargetType' => null,
        'driftMessage' => null,
        'parentOrganizationalUnitId' => null,
        'solveSolution' => null
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
    * managedAccountId  管理员账号ID。
    * driftType  漂移类型。
    * driftTargetId  漂移发生的纳管账号ID或注册OU ID。
    * driftTargetType  漂移目标类型，类型有account、ou和policy。
    * driftMessage  漂移信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * solveSolution  漂移修复方法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedAccountId' => 'managed_account_id',
            'driftType' => 'drift_type',
            'driftTargetId' => 'drift_target_id',
            'driftTargetType' => 'drift_target_type',
            'driftMessage' => 'drift_message',
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'solveSolution' => 'solve_solution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedAccountId  管理员账号ID。
    * driftType  漂移类型。
    * driftTargetId  漂移发生的纳管账号ID或注册OU ID。
    * driftTargetType  漂移目标类型，类型有account、ou和policy。
    * driftMessage  漂移信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * solveSolution  漂移修复方法。
    *
    * @var string[]
    */
    protected static $setters = [
            'managedAccountId' => 'setManagedAccountId',
            'driftType' => 'setDriftType',
            'driftTargetId' => 'setDriftTargetId',
            'driftTargetType' => 'setDriftTargetType',
            'driftMessage' => 'setDriftMessage',
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'solveSolution' => 'setSolveSolution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedAccountId  管理员账号ID。
    * driftType  漂移类型。
    * driftTargetId  漂移发生的纳管账号ID或注册OU ID。
    * driftTargetType  漂移目标类型，类型有account、ou和policy。
    * driftMessage  漂移信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * solveSolution  漂移修复方法。
    *
    * @var string[]
    */
    protected static $getters = [
            'managedAccountId' => 'getManagedAccountId',
            'driftType' => 'getDriftType',
            'driftTargetId' => 'getDriftTargetId',
            'driftTargetType' => 'getDriftTargetType',
            'driftMessage' => 'getDriftMessage',
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'solveSolution' => 'getSolveSolution'
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
        $this->container['managedAccountId'] = isset($data['managedAccountId']) ? $data['managedAccountId'] : null;
        $this->container['driftType'] = isset($data['driftType']) ? $data['driftType'] : null;
        $this->container['driftTargetId'] = isset($data['driftTargetId']) ? $data['driftTargetId'] : null;
        $this->container['driftTargetType'] = isset($data['driftTargetType']) ? $data['driftTargetType'] : null;
        $this->container['driftMessage'] = isset($data['driftMessage']) ? $data['driftMessage'] : null;
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['solveSolution'] = isset($data['solveSolution']) ? $data['solveSolution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['managedAccountId']) && (mb_strlen($this->container['managedAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'managedAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['managedAccountId']) && (mb_strlen($this->container['managedAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['driftType']) && (mb_strlen($this->container['driftType']) > 64)) {
                $invalidProperties[] = "invalid value for 'driftType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['driftType']) && (mb_strlen($this->container['driftType']) < 1)) {
                $invalidProperties[] = "invalid value for 'driftType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['driftTargetId']) && (mb_strlen($this->container['driftTargetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'driftTargetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['driftTargetId']) && (mb_strlen($this->container['driftTargetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'driftTargetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['driftTargetType']) && (mb_strlen($this->container['driftTargetType']) > 64)) {
                $invalidProperties[] = "invalid value for 'driftTargetType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['driftTargetType']) && (mb_strlen($this->container['driftTargetType']) < 1)) {
                $invalidProperties[] = "invalid value for 'driftTargetType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['driftMessage']) && (mb_strlen($this->container['driftMessage']) > 512)) {
                $invalidProperties[] = "invalid value for 'driftMessage', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['driftMessage']) && (mb_strlen($this->container['driftMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'driftMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['solveSolution']) && (mb_strlen($this->container['solveSolution']) > 512)) {
                $invalidProperties[] = "invalid value for 'solveSolution', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['solveSolution']) && (mb_strlen($this->container['solveSolution']) < 1)) {
                $invalidProperties[] = "invalid value for 'solveSolution', the character length must be bigger than or equal to 1.";
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
    * Gets managedAccountId
    *  管理员账号ID。
    *
    * @return string|null
    */
    public function getManagedAccountId()
    {
        return $this->container['managedAccountId'];
    }

    /**
    * Sets managedAccountId
    *
    * @param string|null $managedAccountId 管理员账号ID。
    *
    * @return $this
    */
    public function setManagedAccountId($managedAccountId)
    {
        $this->container['managedAccountId'] = $managedAccountId;
        return $this;
    }

    /**
    * Gets driftType
    *  漂移类型。
    *
    * @return string|null
    */
    public function getDriftType()
    {
        return $this->container['driftType'];
    }

    /**
    * Sets driftType
    *
    * @param string|null $driftType 漂移类型。
    *
    * @return $this
    */
    public function setDriftType($driftType)
    {
        $this->container['driftType'] = $driftType;
        return $this;
    }

    /**
    * Gets driftTargetId
    *  漂移发生的纳管账号ID或注册OU ID。
    *
    * @return string|null
    */
    public function getDriftTargetId()
    {
        return $this->container['driftTargetId'];
    }

    /**
    * Sets driftTargetId
    *
    * @param string|null $driftTargetId 漂移发生的纳管账号ID或注册OU ID。
    *
    * @return $this
    */
    public function setDriftTargetId($driftTargetId)
    {
        $this->container['driftTargetId'] = $driftTargetId;
        return $this;
    }

    /**
    * Gets driftTargetType
    *  漂移目标类型，类型有account、ou和policy。
    *
    * @return string|null
    */
    public function getDriftTargetType()
    {
        return $this->container['driftTargetType'];
    }

    /**
    * Sets driftTargetType
    *
    * @param string|null $driftTargetType 漂移目标类型，类型有account、ou和policy。
    *
    * @return $this
    */
    public function setDriftTargetType($driftTargetType)
    {
        $this->container['driftTargetType'] = $driftTargetType;
        return $this;
    }

    /**
    * Gets driftMessage
    *  漂移信息。
    *
    * @return string|null
    */
    public function getDriftMessage()
    {
        return $this->container['driftMessage'];
    }

    /**
    * Sets driftMessage
    *
    * @param string|null $driftMessage 漂移信息。
    *
    * @return $this
    */
    public function setDriftMessage($driftMessage)
    {
        $this->container['driftMessage'] = $driftMessage;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitId
    *  父注册OU ID。
    *
    * @return string|null
    */
    public function getParentOrganizationalUnitId()
    {
        return $this->container['parentOrganizationalUnitId'];
    }

    /**
    * Sets parentOrganizationalUnitId
    *
    * @param string|null $parentOrganizationalUnitId 父注册OU ID。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitId($parentOrganizationalUnitId)
    {
        $this->container['parentOrganizationalUnitId'] = $parentOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets solveSolution
    *  漂移修复方法。
    *
    * @return string|null
    */
    public function getSolveSolution()
    {
        return $this->container['solveSolution'];
    }

    /**
    * Sets solveSolution
    *
    * @param string|null $solveSolution 漂移修复方法。
    *
    * @return $this
    */
    public function setSolveSolution($solveSolution)
    {
        $this->container['solveSolution'] = $solveSolution;
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

