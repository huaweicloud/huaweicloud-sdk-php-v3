<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateElasticResourcePoolRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateElasticResourcePoolRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * description  描述信息。长度限制：256个字符以内。
    * cidrInVpc  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    * maxCu  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    * chargingMode  计费类型 1、按需计费
    * minCu  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    * enterpriseProjectId  企业ID，不填默认为“0”
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elasticResourcePoolName' => 'string',
            'description' => 'string',
            'cidrInVpc' => 'string',
            'maxCu' => 'int',
            'chargingMode' => 'int',
            'minCu' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\TmsTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * description  描述信息。长度限制：256个字符以内。
    * cidrInVpc  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    * maxCu  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    * chargingMode  计费类型 1、按需计费
    * minCu  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    * enterpriseProjectId  企业ID，不填默认为“0”
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elasticResourcePoolName' => null,
        'description' => null,
        'cidrInVpc' => null,
        'maxCu' => 'int32',
        'chargingMode' => 'int32',
        'minCu' => 'int32',
        'enterpriseProjectId' => null,
        'tags' => null
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
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * description  描述信息。长度限制：256个字符以内。
    * cidrInVpc  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    * maxCu  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    * chargingMode  计费类型 1、按需计费
    * minCu  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    * enterpriseProjectId  企业ID，不填默认为“0”
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'description' => 'description',
            'cidrInVpc' => 'cidr_in_vpc',
            'maxCu' => 'max_cu',
            'chargingMode' => 'charging_mode',
            'minCu' => 'min_cu',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * description  描述信息。长度限制：256个字符以内。
    * cidrInVpc  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    * maxCu  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    * chargingMode  计费类型 1、按需计费
    * minCu  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    * enterpriseProjectId  企业ID，不填默认为“0”
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'description' => 'setDescription',
            'cidrInVpc' => 'setCidrInVpc',
            'maxCu' => 'setMaxCu',
            'chargingMode' => 'setChargingMode',
            'minCu' => 'setMinCu',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * description  描述信息。长度限制：256个字符以内。
    * cidrInVpc  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    * maxCu  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    * chargingMode  计费类型 1、按需计费
    * minCu  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    * enterpriseProjectId  企业ID，不填默认为“0”
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'description' => 'getDescription',
            'cidrInVpc' => 'getCidrInVpc',
            'maxCu' => 'getMaxCu',
            'chargingMode' => 'getChargingMode',
            'minCu' => 'getMinCu',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
        $this->container['maxCu'] = isset($data['maxCu']) ? $data['maxCu'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['minCu'] = isset($data['minCu']) ? $data['minCu'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['elasticResourcePoolName'] === null) {
            $invalidProperties[] = "'elasticResourcePoolName' can't be null";
        }
            if ((mb_strlen($this->container['elasticResourcePoolName']) > 128)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['elasticResourcePoolName']) < 1)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['elasticResourcePoolName'])) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cidrInVpc']) && !preg_match("/^\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\/\\d{1,2}$/", $this->container['cidrInVpc'])) {
                $invalidProperties[] = "invalid value for 'cidrInVpc', must be conform to the pattern /^\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\/\\d{1,2}$/.";
            }
        if ($this->container['maxCu'] === null) {
            $invalidProperties[] = "'maxCu' can't be null";
        }
            if (($this->container['maxCu'] > 32000)) {
                $invalidProperties[] = "invalid value for 'maxCu', must be smaller than or equal to 32000.";
            }
            if (($this->container['maxCu'] < 64)) {
                $invalidProperties[] = "invalid value for 'maxCu', must be bigger than or equal to 64.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            if (($this->container['chargingMode'] > 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 1.";
            }
            if (($this->container['chargingMode'] < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 1.";
            }
        if ($this->container['minCu'] === null) {
            $invalidProperties[] = "'minCu' can't be null";
        }
            if (($this->container['minCu'] > 32000)) {
                $invalidProperties[] = "invalid value for 'minCu', must be smaller than or equal to 32000.";
            }
            if (($this->container['minCu'] < 64)) {
                $invalidProperties[] = "invalid value for 'minCu', must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^[A-Za-z0-9_-]*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^[A-Za-z0-9_-]*$/.";
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
    * Gets elasticResourcePoolName
    *  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return string
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string $elasticResourcePoolName 新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。长度限制：256个字符以内。
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
    * @param string|null $description 描述信息。长度限制：256个字符以内。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cidrInVpc
    *  虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 虚拟集群关联的vpc cidr.如果不填，默认值为172.16.0.0//12
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
        return $this;
    }

    /**
    * Gets maxCu
    *  最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    *
    * @return int
    */
    public function getMaxCu()
    {
        return $this->container['maxCu'];
    }

    /**
    * Sets maxCu
    *
    * @param int $maxCu 最大CU大于等于该资源池下任意一个队列的最大CU之和且大于min_cu。最小值为64
    *
    * @return $this
    */
    public function setMaxCu($maxCu)
    {
        $this->container['maxCu'] = $maxCu;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费类型 1、按需计费
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费类型 1、按需计费
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets minCu
    *  最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    *
    * @return int
    */
    public function getMinCu()
    {
        return $this->container['minCu'];
    }

    /**
    * Sets minCu
    *
    * @param int $minCu 最小CU大于等于该资源池下所有队列最小CU之和,最小值为64
    *
    * @return $this
    */
    public function setMinCu($minCu)
    {
        $this->container['minCu'] = $minCu;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业ID，不填默认为“0”
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
    * @param string|null $enterpriseProjectId 企业ID，不填默认为“0”
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\TmsTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\TmsTag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

