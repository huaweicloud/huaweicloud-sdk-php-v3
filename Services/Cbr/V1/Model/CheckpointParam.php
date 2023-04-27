<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoTrigger  是否自动触发,true:自动触发，false：非自动触发。
    * description  备份描述
    * incremental  是否增量备份，true:增量备份，false：非增量备份。
    * name  备份名称
    * resources  待备份的资源id列表:uuid
    * resourceDetails  资源详情
    * policyId  自动备份时的策略id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoTrigger' => 'bool',
            'description' => 'string',
            'incremental' => 'bool',
            'name' => 'string',
            'resources' => 'string[]',
            'resourceDetails' => '\HuaweiCloud\SDK\Cbr\V1\Model\Resource[]',
            'policyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoTrigger  是否自动触发,true:自动触发，false：非自动触发。
    * description  备份描述
    * incremental  是否增量备份，true:增量备份，false：非增量备份。
    * name  备份名称
    * resources  待备份的资源id列表:uuid
    * resourceDetails  资源详情
    * policyId  自动备份时的策略id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoTrigger' => null,
        'description' => null,
        'incremental' => null,
        'name' => null,
        'resources' => null,
        'resourceDetails' => null,
        'policyId' => null
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
    * autoTrigger  是否自动触发,true:自动触发，false：非自动触发。
    * description  备份描述
    * incremental  是否增量备份，true:增量备份，false：非增量备份。
    * name  备份名称
    * resources  待备份的资源id列表:uuid
    * resourceDetails  资源详情
    * policyId  自动备份时的策略id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoTrigger' => 'auto_trigger',
            'description' => 'description',
            'incremental' => 'incremental',
            'name' => 'name',
            'resources' => 'resources',
            'resourceDetails' => 'resource_details',
            'policyId' => 'policy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoTrigger  是否自动触发,true:自动触发，false：非自动触发。
    * description  备份描述
    * incremental  是否增量备份，true:增量备份，false：非增量备份。
    * name  备份名称
    * resources  待备份的资源id列表:uuid
    * resourceDetails  资源详情
    * policyId  自动备份时的策略id
    *
    * @var string[]
    */
    protected static $setters = [
            'autoTrigger' => 'setAutoTrigger',
            'description' => 'setDescription',
            'incremental' => 'setIncremental',
            'name' => 'setName',
            'resources' => 'setResources',
            'resourceDetails' => 'setResourceDetails',
            'policyId' => 'setPolicyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoTrigger  是否自动触发,true:自动触发，false：非自动触发。
    * description  备份描述
    * incremental  是否增量备份，true:增量备份，false：非增量备份。
    * name  备份名称
    * resources  待备份的资源id列表:uuid
    * resourceDetails  资源详情
    * policyId  自动备份时的策略id
    *
    * @var string[]
    */
    protected static $getters = [
            'autoTrigger' => 'getAutoTrigger',
            'description' => 'getDescription',
            'incremental' => 'getIncremental',
            'name' => 'getName',
            'resources' => 'getResources',
            'resourceDetails' => 'getResourceDetails',
            'policyId' => 'getPolicyId'
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
        $this->container['autoTrigger'] = isset($data['autoTrigger']) ? $data['autoTrigger'] : false;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : true;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['resourceDetails'] = isset($data['resourceDetails']) ? $data['resourceDetails'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 36.";
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
    * Gets autoTrigger
    *  是否自动触发,true:自动触发，false：非自动触发。
    *
    * @return bool|null
    */
    public function getAutoTrigger()
    {
        return $this->container['autoTrigger'];
    }

    /**
    * Sets autoTrigger
    *
    * @param bool|null $autoTrigger 是否自动触发,true:自动触发，false：非自动触发。
    *
    * @return $this
    */
    public function setAutoTrigger($autoTrigger)
    {
        $this->container['autoTrigger'] = $autoTrigger;
        return $this;
    }

    /**
    * Gets description
    *  备份描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 备份描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets incremental
    *  是否增量备份，true:增量备份，false：非增量备份。
    *
    * @return bool|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool|null $incremental 是否增量备份，true:增量备份，false：非增量备份。
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
        return $this;
    }

    /**
    * Gets name
    *  备份名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 备份名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets resources
    *  待备份的资源id列表:uuid
    *
    * @return string[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string[]|null $resources 待备份的资源id列表:uuid
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets resourceDetails
    *  资源详情
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Resource[]|null
    */
    public function getResourceDetails()
    {
        return $this->container['resourceDetails'];
    }

    /**
    * Sets resourceDetails
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Resource[]|null $resourceDetails 资源详情
    *
    * @return $this
    */
    public function setResourceDetails($resourceDetails)
    {
        $this->container['resourceDetails'] = $resourceDetails;
        return $this;
    }

    /**
    * Gets policyId
    *  自动备份时的策略id
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 自动备份时的策略id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
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

