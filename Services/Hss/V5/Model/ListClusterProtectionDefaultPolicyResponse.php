<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterProtectionDefaultPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterProtectionDefaultPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  总数
    * xAuthToken  用户Token。
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * region  Region
    * generalPolicyNum  general策略数
    * maliciousImagePolicyNum  malicious_image策略数
    * securityPolicyNum  security_policy策略数
    * dataList  集群防护策略列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'xAuthToken' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'region' => 'string',
            'generalPolicyNum' => 'int',
            'maliciousImagePolicyNum' => 'int',
            'securityPolicyNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterPolicyResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  总数
    * xAuthToken  用户Token。
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * region  Region
    * generalPolicyNum  general策略数
    * maliciousImagePolicyNum  malicious_image策略数
    * securityPolicyNum  security_policy策略数
    * dataList  集群防护策略列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'xAuthToken' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'region' => null,
        'generalPolicyNum' => null,
        'maliciousImagePolicyNum' => null,
        'securityPolicyNum' => null,
        'dataList' => null
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
    * totalNum  总数
    * xAuthToken  用户Token。
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * region  Region
    * generalPolicyNum  general策略数
    * maliciousImagePolicyNum  malicious_image策略数
    * securityPolicyNum  security_policy策略数
    * dataList  集群防护策略列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'xAuthToken' => 'x_auth_token',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'region' => 'region',
            'generalPolicyNum' => 'general_policy_num',
            'maliciousImagePolicyNum' => 'malicious_image_policy_num',
            'securityPolicyNum' => 'security_policy_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  总数
    * xAuthToken  用户Token。
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * region  Region
    * generalPolicyNum  general策略数
    * maliciousImagePolicyNum  malicious_image策略数
    * securityPolicyNum  security_policy策略数
    * dataList  集群防护策略列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'xAuthToken' => 'setXAuthToken',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'region' => 'setRegion',
            'generalPolicyNum' => 'setGeneralPolicyNum',
            'maliciousImagePolicyNum' => 'setMaliciousImagePolicyNum',
            'securityPolicyNum' => 'setSecurityPolicyNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  总数
    * xAuthToken  用户Token。
    * projectId  项目ID
    * enterpriseProjectId  企业ID
    * region  Region
    * generalPolicyNum  general策略数
    * maliciousImagePolicyNum  malicious_image策略数
    * securityPolicyNum  security_policy策略数
    * dataList  集群防护策略列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'xAuthToken' => 'getXAuthToken',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'region' => 'getRegion',
            'generalPolicyNum' => 'getGeneralPolicyNum',
            'maliciousImagePolicyNum' => 'getMaliciousImagePolicyNum',
            'securityPolicyNum' => 'getSecurityPolicyNum',
            'dataList' => 'getDataList'
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
        $this->container['xAuthToken'] = isset($data['xAuthToken']) ? $data['xAuthToken'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['generalPolicyNum'] = isset($data['generalPolicyNum']) ? $data['generalPolicyNum'] : null;
        $this->container['maliciousImagePolicyNum'] = isset($data['maliciousImagePolicyNum']) ? $data['maliciousImagePolicyNum'] : null;
        $this->container['securityPolicyNum'] = isset($data['securityPolicyNum']) ? $data['securityPolicyNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['xAuthToken']) && (mb_strlen($this->container['xAuthToken']) > 32768)) {
                $invalidProperties[] = "invalid value for 'xAuthToken', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['xAuthToken']) && (mb_strlen($this->container['xAuthToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAuthToken', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 32768)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['generalPolicyNum']) && ($this->container['generalPolicyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'generalPolicyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['generalPolicyNum']) && ($this->container['generalPolicyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'generalPolicyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maliciousImagePolicyNum']) && ($this->container['maliciousImagePolicyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maliciousImagePolicyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maliciousImagePolicyNum']) && ($this->container['maliciousImagePolicyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'maliciousImagePolicyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityPolicyNum']) && ($this->container['securityPolicyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityPolicyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['securityPolicyNum']) && ($this->container['securityPolicyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityPolicyNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  总数
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
    * @param int|null $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets xAuthToken
    *  用户Token。
    *
    * @return string|null
    */
    public function getXAuthToken()
    {
        return $this->container['xAuthToken'];
    }

    /**
    * Sets xAuthToken
    *
    * @param string|null $xAuthToken 用户Token。
    *
    * @return $this
    */
    public function setXAuthToken($xAuthToken)
    {
        $this->container['xAuthToken'] = $xAuthToken;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业ID
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
    * @param string|null $enterpriseProjectId 企业ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets region
    *  Region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region Region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets generalPolicyNum
    *  general策略数
    *
    * @return int|null
    */
    public function getGeneralPolicyNum()
    {
        return $this->container['generalPolicyNum'];
    }

    /**
    * Sets generalPolicyNum
    *
    * @param int|null $generalPolicyNum general策略数
    *
    * @return $this
    */
    public function setGeneralPolicyNum($generalPolicyNum)
    {
        $this->container['generalPolicyNum'] = $generalPolicyNum;
        return $this;
    }

    /**
    * Gets maliciousImagePolicyNum
    *  malicious_image策略数
    *
    * @return int|null
    */
    public function getMaliciousImagePolicyNum()
    {
        return $this->container['maliciousImagePolicyNum'];
    }

    /**
    * Sets maliciousImagePolicyNum
    *
    * @param int|null $maliciousImagePolicyNum malicious_image策略数
    *
    * @return $this
    */
    public function setMaliciousImagePolicyNum($maliciousImagePolicyNum)
    {
        $this->container['maliciousImagePolicyNum'] = $maliciousImagePolicyNum;
        return $this;
    }

    /**
    * Gets securityPolicyNum
    *  security_policy策略数
    *
    * @return int|null
    */
    public function getSecurityPolicyNum()
    {
        return $this->container['securityPolicyNum'];
    }

    /**
    * Sets securityPolicyNum
    *
    * @param int|null $securityPolicyNum security_policy策略数
    *
    * @return $this
    */
    public function setSecurityPolicyNum($securityPolicyNum)
    {
        $this->container['securityPolicyNum'] = $securityPolicyNum;
        return $this;
    }

    /**
    * Gets dataList
    *  集群防护策略列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterPolicyResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterPolicyResponseInfo[]|null $dataList 集群防护策略列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

