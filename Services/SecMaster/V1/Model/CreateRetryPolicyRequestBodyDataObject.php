<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRetryPolicyRequestBodyDataObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRetryPolicyRequestBody_data_object';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retryList  重试策略ID
    * blockAge  blockAge
    * blockTarget  策略对象
    * defensePolicyList  与操作连接对应的策略列表
    * description  描述信息
    * labels  标签
    * policyCategory  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    * policyType  policyType
    * regionId  区域ID
    * policyDirection  出入方向
    * accountScope  账号范围
    * epsScope  企业项目范围
    * regionScope  region范围
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retryList' => 'string[]',
            'blockAge' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectBlockAge',
            'blockTarget' => 'string',
            'defensePolicyList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectDefensePolicyList[]',
            'description' => 'string',
            'labels' => 'string',
            'policyCategory' => 'string',
            'policyType' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectPolicyType',
            'regionId' => 'string',
            'policyDirection' => 'string',
            'accountScope' => 'string',
            'epsScope' => 'string',
            'regionScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retryList  重试策略ID
    * blockAge  blockAge
    * blockTarget  策略对象
    * defensePolicyList  与操作连接对应的策略列表
    * description  描述信息
    * labels  标签
    * policyCategory  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    * policyType  policyType
    * regionId  区域ID
    * policyDirection  出入方向
    * accountScope  账号范围
    * epsScope  企业项目范围
    * regionScope  region范围
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retryList' => null,
        'blockAge' => null,
        'blockTarget' => null,
        'defensePolicyList' => null,
        'description' => null,
        'labels' => null,
        'policyCategory' => null,
        'policyType' => null,
        'regionId' => null,
        'policyDirection' => null,
        'accountScope' => null,
        'epsScope' => null,
        'regionScope' => null
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
    * retryList  重试策略ID
    * blockAge  blockAge
    * blockTarget  策略对象
    * defensePolicyList  与操作连接对应的策略列表
    * description  描述信息
    * labels  标签
    * policyCategory  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    * policyType  policyType
    * regionId  区域ID
    * policyDirection  出入方向
    * accountScope  账号范围
    * epsScope  企业项目范围
    * regionScope  region范围
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retryList' => 'retry_list',
            'blockAge' => 'block_age',
            'blockTarget' => 'block_target',
            'defensePolicyList' => 'defense_policy_list',
            'description' => 'description',
            'labels' => 'labels',
            'policyCategory' => 'policy_category',
            'policyType' => 'policy_type',
            'regionId' => 'region_id',
            'policyDirection' => 'policy_direction',
            'accountScope' => 'account_scope',
            'epsScope' => 'eps_scope',
            'regionScope' => 'region_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retryList  重试策略ID
    * blockAge  blockAge
    * blockTarget  策略对象
    * defensePolicyList  与操作连接对应的策略列表
    * description  描述信息
    * labels  标签
    * policyCategory  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    * policyType  policyType
    * regionId  区域ID
    * policyDirection  出入方向
    * accountScope  账号范围
    * epsScope  企业项目范围
    * regionScope  region范围
    *
    * @var string[]
    */
    protected static $setters = [
            'retryList' => 'setRetryList',
            'blockAge' => 'setBlockAge',
            'blockTarget' => 'setBlockTarget',
            'defensePolicyList' => 'setDefensePolicyList',
            'description' => 'setDescription',
            'labels' => 'setLabels',
            'policyCategory' => 'setPolicyCategory',
            'policyType' => 'setPolicyType',
            'regionId' => 'setRegionId',
            'policyDirection' => 'setPolicyDirection',
            'accountScope' => 'setAccountScope',
            'epsScope' => 'setEpsScope',
            'regionScope' => 'setRegionScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retryList  重试策略ID
    * blockAge  blockAge
    * blockTarget  策略对象
    * defensePolicyList  与操作连接对应的策略列表
    * description  描述信息
    * labels  标签
    * policyCategory  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    * policyType  policyType
    * regionId  区域ID
    * policyDirection  出入方向
    * accountScope  账号范围
    * epsScope  企业项目范围
    * regionScope  region范围
    *
    * @var string[]
    */
    protected static $getters = [
            'retryList' => 'getRetryList',
            'blockAge' => 'getBlockAge',
            'blockTarget' => 'getBlockTarget',
            'defensePolicyList' => 'getDefensePolicyList',
            'description' => 'getDescription',
            'labels' => 'getLabels',
            'policyCategory' => 'getPolicyCategory',
            'policyType' => 'getPolicyType',
            'regionId' => 'getRegionId',
            'policyDirection' => 'getPolicyDirection',
            'accountScope' => 'getAccountScope',
            'epsScope' => 'getEpsScope',
            'regionScope' => 'getRegionScope'
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
    const POLICY_CATEGORY_WHITE = 'WHITE';
    const POLICY_CATEGORY_BLOCK = 'BLOCK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyCategoryAllowableValues()
    {
        return [
            self::POLICY_CATEGORY_WHITE,
            self::POLICY_CATEGORY_BLOCK,
        ];
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
        $this->container['retryList'] = isset($data['retryList']) ? $data['retryList'] : null;
        $this->container['blockAge'] = isset($data['blockAge']) ? $data['blockAge'] : null;
        $this->container['blockTarget'] = isset($data['blockTarget']) ? $data['blockTarget'] : null;
        $this->container['defensePolicyList'] = isset($data['defensePolicyList']) ? $data['defensePolicyList'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['policyCategory'] = isset($data['policyCategory']) ? $data['policyCategory'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['policyDirection'] = isset($data['policyDirection']) ? $data['policyDirection'] : null;
        $this->container['accountScope'] = isset($data['accountScope']) ? $data['accountScope'] : null;
        $this->container['epsScope'] = isset($data['epsScope']) ? $data['epsScope'] : null;
        $this->container['regionScope'] = isset($data['regionScope']) ? $data['regionScope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['blockAge'] === null) {
            $invalidProperties[] = "'blockAge' can't be null";
        }
        if ($this->container['blockTarget'] === null) {
            $invalidProperties[] = "'blockTarget' can't be null";
        }
            if ((mb_strlen($this->container['blockTarget']) > 30)) {
                $invalidProperties[] = "invalid value for 'blockTarget', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['blockTarget']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockTarget', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defensePolicyList'] === null) {
            $invalidProperties[] = "'defensePolicyList' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 30)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyCategory'] === null) {
            $invalidProperties[] = "'policyCategory' can't be null";
        }
            $allowedValues = $this->getPolicyCategoryAllowableValues();
                if (!is_null($this->container['policyCategory']) && !in_array($this->container['policyCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyCategory', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['policyCategory']) > 30)) {
                $invalidProperties[] = "invalid value for 'policyCategory', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['policyCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyCategory', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 30)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyDirection']) && (mb_strlen($this->container['policyDirection']) > 32)) {
                $invalidProperties[] = "invalid value for 'policyDirection', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['policyDirection']) && (mb_strlen($this->container['policyDirection']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyDirection', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accountScope']) && (mb_strlen($this->container['accountScope']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accountScope', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accountScope']) && (mb_strlen($this->container['accountScope']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountScope', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['epsScope']) && (mb_strlen($this->container['epsScope']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'epsScope', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['epsScope']) && (mb_strlen($this->container['epsScope']) < 0)) {
                $invalidProperties[] = "invalid value for 'epsScope', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionScope']) && (mb_strlen($this->container['regionScope']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionScope', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['regionScope']) && (mb_strlen($this->container['regionScope']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionScope', the character length must be bigger than or equal to 0.";
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
    * Gets retryList
    *  重试策略ID
    *
    * @return string[]|null
    */
    public function getRetryList()
    {
        return $this->container['retryList'];
    }

    /**
    * Sets retryList
    *
    * @param string[]|null $retryList 重试策略ID
    *
    * @return $this
    */
    public function setRetryList($retryList)
    {
        $this->container['retryList'] = $retryList;
        return $this;
    }

    /**
    * Gets blockAge
    *  blockAge
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectBlockAge
    */
    public function getBlockAge()
    {
        return $this->container['blockAge'];
    }

    /**
    * Sets blockAge
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectBlockAge $blockAge blockAge
    *
    * @return $this
    */
    public function setBlockAge($blockAge)
    {
        $this->container['blockAge'] = $blockAge;
        return $this;
    }

    /**
    * Gets blockTarget
    *  策略对象
    *
    * @return string
    */
    public function getBlockTarget()
    {
        return $this->container['blockTarget'];
    }

    /**
    * Sets blockTarget
    *
    * @param string $blockTarget 策略对象
    *
    * @return $this
    */
    public function setBlockTarget($blockTarget)
    {
        $this->container['blockTarget'] = $blockTarget;
        return $this;
    }

    /**
    * Gets defensePolicyList
    *  与操作连接对应的策略列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectDefensePolicyList[]
    */
    public function getDefensePolicyList()
    {
        return $this->container['defensePolicyList'];
    }

    /**
    * Sets defensePolicyList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectDefensePolicyList[] $defensePolicyList 与操作连接对应的策略列表
    *
    * @return $this
    */
    public function setDefensePolicyList($defensePolicyList)
    {
        $this->container['defensePolicyList'] = $defensePolicyList;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets policyCategory
    *  类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    *
    * @return string
    */
    public function getPolicyCategory()
    {
        return $this->container['policyCategory'];
    }

    /**
    * Sets policyCategory
    *
    * @param string $policyCategory 类型,WHITE/BLOCK,WHITE代表加白(将ip等对象加入白名单),BLOCK代表阻断(将ip等对象加入黑名单)
    *
    * @return $this
    */
    public function setPolicyCategory($policyCategory)
    {
        $this->container['policyCategory'] = $policyCategory;
        return $this;
    }

    /**
    * Gets policyType
    *  policyType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectPolicyType
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateRetryPolicyRequestBodyDataObjectPolicyType $policyType policyType
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets policyDirection
    *  出入方向
    *
    * @return string|null
    */
    public function getPolicyDirection()
    {
        return $this->container['policyDirection'];
    }

    /**
    * Sets policyDirection
    *
    * @param string|null $policyDirection 出入方向
    *
    * @return $this
    */
    public function setPolicyDirection($policyDirection)
    {
        $this->container['policyDirection'] = $policyDirection;
        return $this;
    }

    /**
    * Gets accountScope
    *  账号范围
    *
    * @return string|null
    */
    public function getAccountScope()
    {
        return $this->container['accountScope'];
    }

    /**
    * Sets accountScope
    *
    * @param string|null $accountScope 账号范围
    *
    * @return $this
    */
    public function setAccountScope($accountScope)
    {
        $this->container['accountScope'] = $accountScope;
        return $this;
    }

    /**
    * Gets epsScope
    *  企业项目范围
    *
    * @return string|null
    */
    public function getEpsScope()
    {
        return $this->container['epsScope'];
    }

    /**
    * Sets epsScope
    *
    * @param string|null $epsScope 企业项目范围
    *
    * @return $this
    */
    public function setEpsScope($epsScope)
    {
        $this->container['epsScope'] = $epsScope;
        return $this;
    }

    /**
    * Gets regionScope
    *  region范围
    *
    * @return string|null
    */
    public function getRegionScope()
    {
        return $this->container['regionScope'];
    }

    /**
    * Sets regionScope
    *
    * @param string|null $regionScope region范围
    *
    * @return $this
    */
    public function setRegionScope($regionScope)
    {
        $this->container['regionScope'] = $regionScope;
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

