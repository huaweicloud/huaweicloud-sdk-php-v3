<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainRoleAssignmentsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainRoleAssignmentsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  返回授权记录的总条数。
    * roleAssignments  roleAssignments
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'roleAssignments' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  返回授权记录的总条数。
    * roleAssignments  roleAssignments
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int64',
        'roleAssignments' => null
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
    * totalNum  返回授权记录的总条数。
    * roleAssignments  roleAssignments
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'roleAssignments' => 'role_assignments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  返回授权记录的总条数。
    * roleAssignments  roleAssignments
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'roleAssignments' => 'setRoleAssignments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  返回授权记录的总条数。
    * roleAssignments  roleAssignments
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'roleAssignments' => 'getRoleAssignments'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['roleAssignments'] = isset($data['roleAssignments']) ? $data['roleAssignments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets totalNum
    *  返回授权记录的总条数。
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 返回授权记录的总条数。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets roleAssignments
    *  roleAssignments
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentBody[]|null
    */
    public function getRoleAssignments()
    {
        return $this->container['roleAssignments'];
    }

    /**
    * Sets roleAssignments
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentBody[]|null $roleAssignments roleAssignments
    *
    * @return $this
    */
    public function setRoleAssignments($roleAssignments)
    {
        $this->container['roleAssignments'] = $roleAssignments;
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

