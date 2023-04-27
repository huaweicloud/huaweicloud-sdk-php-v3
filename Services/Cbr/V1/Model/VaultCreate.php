<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupPolicyId  备份策略ID，不设置时为null，不自动备份。
    * billing  billing
    * description  描述
    * name  存储库名称
    * resources  绑定的备份资源，未在创建时绑定资源填[]
    * tags  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    * enterpriseProjectId  企业项目ID，默认为‘0’。
    * autoBind  是否支持自动挂载。
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupPolicyId' => 'string',
            'billing' => '\HuaweiCloud\SDK\Cbr\V1\Model\BillingCreate',
            'description' => 'string',
            'name' => 'string',
            'resources' => '\HuaweiCloud\SDK\Cbr\V1\Model\ResourceCreate[]',
            'tags' => '\HuaweiCloud\SDK\Cbr\V1\Model\Tag[]',
            'enterpriseProjectId' => 'string',
            'autoBind' => 'bool',
            'bindRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules',
            'autoExpand' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupPolicyId  备份策略ID，不设置时为null，不自动备份。
    * billing  billing
    * description  描述
    * name  存储库名称
    * resources  绑定的备份资源，未在创建时绑定资源填[]
    * tags  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    * enterpriseProjectId  企业项目ID，默认为‘0’。
    * autoBind  是否支持自动挂载。
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupPolicyId' => null,
        'billing' => null,
        'description' => null,
        'name' => null,
        'resources' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'autoBind' => null,
        'bindRules' => null,
        'autoExpand' => null
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
    * backupPolicyId  备份策略ID，不设置时为null，不自动备份。
    * billing  billing
    * description  描述
    * name  存储库名称
    * resources  绑定的备份资源，未在创建时绑定资源填[]
    * tags  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    * enterpriseProjectId  企业项目ID，默认为‘0’。
    * autoBind  是否支持自动挂载。
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupPolicyId' => 'backup_policy_id',
            'billing' => 'billing',
            'description' => 'description',
            'name' => 'name',
            'resources' => 'resources',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'autoBind' => 'auto_bind',
            'bindRules' => 'bind_rules',
            'autoExpand' => 'auto_expand'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupPolicyId  备份策略ID，不设置时为null，不自动备份。
    * billing  billing
    * description  描述
    * name  存储库名称
    * resources  绑定的备份资源，未在创建时绑定资源填[]
    * tags  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    * enterpriseProjectId  企业项目ID，默认为‘0’。
    * autoBind  是否支持自动挂载。
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupPolicyId' => 'setBackupPolicyId',
            'billing' => 'setBilling',
            'description' => 'setDescription',
            'name' => 'setName',
            'resources' => 'setResources',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'autoBind' => 'setAutoBind',
            'bindRules' => 'setBindRules',
            'autoExpand' => 'setAutoExpand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupPolicyId  备份策略ID，不设置时为null，不自动备份。
    * billing  billing
    * description  描述
    * name  存储库名称
    * resources  绑定的备份资源，未在创建时绑定资源填[]
    * tags  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    * enterpriseProjectId  企业项目ID，默认为‘0’。
    * autoBind  是否支持自动挂载。
    * bindRules  bindRules
    * autoExpand  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupPolicyId' => 'getBackupPolicyId',
            'billing' => 'getBilling',
            'description' => 'getDescription',
            'name' => 'getName',
            'resources' => 'getResources',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'autoBind' => 'getAutoBind',
            'bindRules' => 'getBindRules',
            'autoExpand' => 'getAutoExpand'
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
        $this->container['backupPolicyId'] = isset($data['backupPolicyId']) ? $data['backupPolicyId'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['autoBind'] = isset($data['autoBind']) ? $data['autoBind'] : null;
        $this->container['bindRules'] = isset($data['bindRules']) ? $data['bindRules'] : null;
        $this->container['autoExpand'] = isset($data['autoExpand']) ? $data['autoExpand'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
            }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
    * Gets backupPolicyId
    *  备份策略ID，不设置时为null，不自动备份。
    *
    * @return string|null
    */
    public function getBackupPolicyId()
    {
        return $this->container['backupPolicyId'];
    }

    /**
    * Sets backupPolicyId
    *
    * @param string|null $backupPolicyId 备份策略ID，不设置时为null，不自动备份。
    *
    * @return $this
    */
    public function setBackupPolicyId($backupPolicyId)
    {
        $this->container['backupPolicyId'] = $backupPolicyId;
        return $this;
    }

    /**
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BillingCreate
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BillingCreate $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  存储库名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 存储库名称
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
    *  绑定的备份资源，未在创建时绑定资源填[]
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ResourceCreate[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ResourceCreate[] $resources 绑定的备份资源，未在创建时绑定资源填[]
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null $tags 标签列表 tags不允许为空列表。 tags中最多包含10个key。 tags中key不允许重复。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，默认为‘0’。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，默认为‘0’。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets autoBind
    *  是否支持自动挂载。
    *
    * @return bool|null
    */
    public function getAutoBind()
    {
        return $this->container['autoBind'];
    }

    /**
    * Sets autoBind
    *
    * @param bool|null $autoBind 是否支持自动挂载。
    *
    * @return $this
    */
    public function setAutoBind($autoBind)
    {
        $this->container['autoBind'] = $autoBind;
        return $this;
    }

    /**
    * Gets bindRules
    *  bindRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null
    */
    public function getBindRules()
    {
        return $this->container['bindRules'];
    }

    /**
    * Sets bindRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null $bindRules bindRules
    *
    * @return $this
    */
    public function setBindRules($bindRules)
    {
        $this->container['bindRules'] = $bindRules;
        return $this;
    }

    /**
    * Gets autoExpand
    *  是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @return bool|null
    */
    public function getAutoExpand()
    {
        return $this->container['autoExpand'];
    }

    /**
    * Sets autoExpand
    *
    * @param bool|null $autoExpand 是否自动扩容。按需存储库支持自动扩容，包周期存储库不支持扩容。
    *
    * @return $this
    */
    public function setAutoExpand($autoExpand)
    {
        $this->container['autoExpand'] = $autoExpand;
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

