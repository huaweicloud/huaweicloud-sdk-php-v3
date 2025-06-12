<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnterpriseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnterpriseDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * costCenter  成本中心
    * department  部门
    * division  分部
    * employeeNumber  员工编号
    * manager  manager
    * organization  组织
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'costCenter' => 'string',
            'department' => 'string',
            'division' => 'string',
            'employeeNumber' => 'string',
            'manager' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ManagerDto',
            'organization' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * costCenter  成本中心
    * department  部门
    * division  分部
    * employeeNumber  员工编号
    * manager  manager
    * organization  组织
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'costCenter' => null,
        'department' => null,
        'division' => null,
        'employeeNumber' => null,
        'manager' => null,
        'organization' => null
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
    * costCenter  成本中心
    * department  部门
    * division  分部
    * employeeNumber  员工编号
    * manager  manager
    * organization  组织
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'costCenter' => 'costCenter',
            'department' => 'department',
            'division' => 'division',
            'employeeNumber' => 'employeeNumber',
            'manager' => 'manager',
            'organization' => 'organization'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * costCenter  成本中心
    * department  部门
    * division  分部
    * employeeNumber  员工编号
    * manager  manager
    * organization  组织
    *
    * @var string[]
    */
    protected static $setters = [
            'costCenter' => 'setCostCenter',
            'department' => 'setDepartment',
            'division' => 'setDivision',
            'employeeNumber' => 'setEmployeeNumber',
            'manager' => 'setManager',
            'organization' => 'setOrganization'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * costCenter  成本中心
    * department  部门
    * division  分部
    * employeeNumber  员工编号
    * manager  manager
    * organization  组织
    *
    * @var string[]
    */
    protected static $getters = [
            'costCenter' => 'getCostCenter',
            'department' => 'getDepartment',
            'division' => 'getDivision',
            'employeeNumber' => 'getEmployeeNumber',
            'manager' => 'getManager',
            'organization' => 'getOrganization'
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
        $this->container['costCenter'] = isset($data['costCenter']) ? $data['costCenter'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['employeeNumber'] = isset($data['employeeNumber']) ? $data['employeeNumber'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
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
    * Gets costCenter
    *  成本中心
    *
    * @return string|null
    */
    public function getCostCenter()
    {
        return $this->container['costCenter'];
    }

    /**
    * Sets costCenter
    *
    * @param string|null $costCenter 成本中心
    *
    * @return $this
    */
    public function setCostCenter($costCenter)
    {
        $this->container['costCenter'] = $costCenter;
        return $this;
    }

    /**
    * Gets department
    *  部门
    *
    * @return string|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param string|null $department 部门
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets division
    *  分部
    *
    * @return string|null
    */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
    * Sets division
    *
    * @param string|null $division 分部
    *
    * @return $this
    */
    public function setDivision($division)
    {
        $this->container['division'] = $division;
        return $this;
    }

    /**
    * Gets employeeNumber
    *  员工编号
    *
    * @return string|null
    */
    public function getEmployeeNumber()
    {
        return $this->container['employeeNumber'];
    }

    /**
    * Sets employeeNumber
    *
    * @param string|null $employeeNumber 员工编号
    *
    * @return $this
    */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->container['employeeNumber'] = $employeeNumber;
        return $this;
    }

    /**
    * Gets manager
    *  manager
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ManagerDto|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\ManagerDto|null $manager manager
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets organization
    *  组织
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization 组织
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
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

