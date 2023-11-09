<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Type implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * business  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    * category  类别，推荐使用预定义的类型分类。
    * classifier  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    * techDomain  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'business' => 'string',
            'category' => 'string',
            'classifier' => 'string',
            'techDomain' => 'string',
            'properties' => '\HuaweiCloud\SDK\SecMaster\V1\Model\TypeProperties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * business  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    * category  类别，推荐使用预定义的类型分类。
    * classifier  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    * techDomain  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'business' => null,
        'category' => null,
        'classifier' => null,
        'techDomain' => null,
        'properties' => null
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
    * business  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    * category  类别，推荐使用预定义的类型分类。
    * classifier  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    * techDomain  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'business' => 'business',
            'category' => 'category',
            'classifier' => 'classifier',
            'techDomain' => 'tech_domain',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * business  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    * category  类别，推荐使用预定义的类型分类。
    * classifier  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    * techDomain  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'business' => 'setBusiness',
            'category' => 'setCategory',
            'classifier' => 'setClassifier',
            'techDomain' => 'setTechDomain',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * business  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    * category  类别，推荐使用预定义的类型分类。
    * classifier  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    * techDomain  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'business' => 'getBusiness',
            'category' => 'getCategory',
            'classifier' => 'getClassifier',
            'techDomain' => 'getTechDomain',
            'properties' => 'getProperties'
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
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['classifier'] = isset($data['classifier']) ? $data['classifier'] : null;
        $this->container['techDomain'] = isset($data['techDomain']) ? $data['techDomain'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['business'] === null) {
            $invalidProperties[] = "'business' can't be null";
        }
            if ((mb_strlen($this->container['business']) > 512)) {
                $invalidProperties[] = "invalid value for 'business', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['business']) < 1)) {
                $invalidProperties[] = "invalid value for 'business', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 512)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['classifier']) && (mb_strlen($this->container['classifier']) > 512)) {
                $invalidProperties[] = "invalid value for 'classifier', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['classifier']) && (mb_strlen($this->container['classifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'classifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['techDomain']) && (mb_strlen($this->container['techDomain']) > 512)) {
                $invalidProperties[] = "invalid value for 'techDomain', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['techDomain']) && (mb_strlen($this->container['techDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'techDomain', the character length must be bigger than or equal to 1.";
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
    * Gets business
    *  事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    *
    * @return string
    */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
    * Sets business
    *
    * @param string $business 事件所属业务领域标签，可选类别如下： attack – 攻击 vulnerability – 漏洞 compliance check – 合规检查 risk - 风险 public opinion - 舆情 illegal&violation - 违法违规 security bulletin - 公告
    *
    * @return $this
    */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;
        return $this;
    }

    /**
    * Gets category
    *  类别，推荐使用预定义的类型分类。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别，推荐使用预定义的类型分类。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets classifier
    *  分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    *
    * @return string|null
    */
    public function getClassifier()
    {
        return $this->container['classifier'];
    }

    /**
    * Sets classifier
    *
    * @param string|null $classifier 分类器，推荐使用预定义的分类器。 如果指定了分类器，则必须指定类别。
    *
    * @return $this
    */
    public function setClassifier($classifier)
    {
        $this->container['classifier'] = $classifier;
        return $this;
    }

    /**
    * Gets techDomain
    *  技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    *
    * @return string|null
    */
    public function getTechDomain()
    {
        return $this->container['techDomain'];
    }

    /**
    * Sets techDomain
    *
    * @param string|null $techDomain 技术领域标签： OS：主机 APP：应用 NET：网络 OPS：运维 CS：云服务 CSP：平台云服务
    *
    * @return $this
    */
    public function setTechDomain($techDomain)
    {
        $this->container['techDomain'] = $techDomain;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\TypeProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\TypeProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

