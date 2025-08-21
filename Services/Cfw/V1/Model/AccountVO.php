<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  **参数解释**： 账号ID **取值范围**： 不涉及
    * accountName  **参数解释**： 账号名称 **取值范围**： 不涉及
    * eipCountProtected  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    * eipCountTotal  **参数解释**： EIP总数 **取值范围**： 不涉及
    * eipCountUnprotected  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    * organizationId  **参数解释**： 组织ID **取值范围**： 不涉及
    * projectId  **参数解释**： 项目ID **取值范围**： 不涉及
    * projectName  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'eipCountProtected' => 'int',
            'eipCountTotal' => 'int',
            'eipCountUnprotected' => 'int',
            'organizationId' => 'string',
            'projectId' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  **参数解释**： 账号ID **取值范围**： 不涉及
    * accountName  **参数解释**： 账号名称 **取值范围**： 不涉及
    * eipCountProtected  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    * eipCountTotal  **参数解释**： EIP总数 **取值范围**： 不涉及
    * eipCountUnprotected  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    * organizationId  **参数解释**： 组织ID **取值范围**： 不涉及
    * projectId  **参数解释**： 项目ID **取值范围**： 不涉及
    * projectName  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'eipCountProtected' => 'int32',
        'eipCountTotal' => 'int32',
        'eipCountUnprotected' => 'int32',
        'organizationId' => null,
        'projectId' => null,
        'projectName' => null
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
    * accountId  **参数解释**： 账号ID **取值范围**： 不涉及
    * accountName  **参数解释**： 账号名称 **取值范围**： 不涉及
    * eipCountProtected  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    * eipCountTotal  **参数解释**： EIP总数 **取值范围**： 不涉及
    * eipCountUnprotected  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    * organizationId  **参数解释**： 组织ID **取值范围**： 不涉及
    * projectId  **参数解释**： 项目ID **取值范围**： 不涉及
    * projectName  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'eipCountProtected' => 'eip_count_protected',
            'eipCountTotal' => 'eip_count_total',
            'eipCountUnprotected' => 'eip_count_unprotected',
            'organizationId' => 'organization_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  **参数解释**： 账号ID **取值范围**： 不涉及
    * accountName  **参数解释**： 账号名称 **取值范围**： 不涉及
    * eipCountProtected  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    * eipCountTotal  **参数解释**： EIP总数 **取值范围**： 不涉及
    * eipCountUnprotected  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    * organizationId  **参数解释**： 组织ID **取值范围**： 不涉及
    * projectId  **参数解释**： 项目ID **取值范围**： 不涉及
    * projectName  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'eipCountProtected' => 'setEipCountProtected',
            'eipCountTotal' => 'setEipCountTotal',
            'eipCountUnprotected' => 'setEipCountUnprotected',
            'organizationId' => 'setOrganizationId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  **参数解释**： 账号ID **取值范围**： 不涉及
    * accountName  **参数解释**： 账号名称 **取值范围**： 不涉及
    * eipCountProtected  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    * eipCountTotal  **参数解释**： EIP总数 **取值范围**： 不涉及
    * eipCountUnprotected  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    * organizationId  **参数解释**： 组织ID **取值范围**： 不涉及
    * projectId  **参数解释**： 项目ID **取值范围**： 不涉及
    * projectName  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'eipCountProtected' => 'getEipCountProtected',
            'eipCountTotal' => 'getEipCountTotal',
            'eipCountUnprotected' => 'getEipCountUnprotected',
            'organizationId' => 'getOrganizationId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['eipCountProtected'] = isset($data['eipCountProtected']) ? $data['eipCountProtected'] : null;
        $this->container['eipCountTotal'] = isset($data['eipCountTotal']) ? $data['eipCountTotal'] : null;
        $this->container['eipCountUnprotected'] = isset($data['eipCountUnprotected']) ? $data['eipCountUnprotected'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
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
    * Gets accountId
    *  **参数解释**： 账号ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId **参数解释**： 账号ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  **参数解释**： 账号名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName **参数解释**： 账号名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets eipCountProtected
    *  **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEipCountProtected()
    {
        return $this->container['eipCountProtected'];
    }

    /**
    * Sets eipCountProtected
    *
    * @param int|null $eipCountProtected **参数解释**： 防护的EIP数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEipCountProtected($eipCountProtected)
    {
        $this->container['eipCountProtected'] = $eipCountProtected;
        return $this;
    }

    /**
    * Gets eipCountTotal
    *  **参数解释**： EIP总数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEipCountTotal()
    {
        return $this->container['eipCountTotal'];
    }

    /**
    * Sets eipCountTotal
    *
    * @param int|null $eipCountTotal **参数解释**： EIP总数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEipCountTotal($eipCountTotal)
    {
        $this->container['eipCountTotal'] = $eipCountTotal;
        return $this;
    }

    /**
    * Gets eipCountUnprotected
    *  **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEipCountUnprotected()
    {
        return $this->container['eipCountUnprotected'];
    }

    /**
    * Sets eipCountUnprotected
    *
    * @param int|null $eipCountUnprotected **参数解释**： 未开启防护的EIP数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEipCountUnprotected($eipCountUnprotected)
    {
        $this->container['eipCountUnprotected'] = $eipCountUnprotected;
        return $this;
    }

    /**
    * Gets organizationId
    *  **参数解释**： 组织ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId **参数解释**： 组织ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**： 项目名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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

