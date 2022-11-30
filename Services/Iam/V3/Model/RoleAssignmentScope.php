<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleAssignmentScope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleAssignmentScope';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * project  project
    * domain  domain
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'project' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleProjectAssignmentId',
            'domain' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleDomainAssignmentId',
            'enterpriseProject' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleEnterpriseProjectAssignmentId'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * project  project
    * domain  domain
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'project' => null,
        'domain' => null,
        'enterpriseProject' => null
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
    * project  project
    * domain  domain
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'project' => 'project',
            'domain' => 'domain',
            'enterpriseProject' => 'enterprise_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * project  project
    * domain  domain
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $setters = [
            'project' => 'setProject',
            'domain' => 'setDomain',
            'enterpriseProject' => 'setEnterpriseProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * project  project
    * domain  domain
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $getters = [
            'project' => 'getProject',
            'domain' => 'getDomain',
            'enterpriseProject' => 'getEnterpriseProject'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
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
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleProjectAssignmentId|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleProjectAssignmentId|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleDomainAssignmentId|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleDomainAssignmentId|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  enterpriseProject
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleEnterpriseProjectAssignmentId|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleEnterpriseProjectAssignmentId|null $enterpriseProject enterpriseProject
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
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

