<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobReportPartnerVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobReportPartnerVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentName  数据集所在代理
    * dataOutputCnt  代理输出数据总量
    * datasetName  数据集名
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentName' => 'string',
            'dataOutputCnt' => 'int',
            'datasetName' => 'string',
            'partnerDomainAlias' => 'string',
            'partnerDomainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentName  数据集所在代理
    * dataOutputCnt  代理输出数据总量
    * datasetName  数据集名
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentName' => null,
        'dataOutputCnt' => 'int64',
        'datasetName' => null,
        'partnerDomainAlias' => null,
        'partnerDomainName' => null
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
    * agentName  数据集所在代理
    * dataOutputCnt  代理输出数据总量
    * datasetName  数据集名
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentName' => 'agent_name',
            'dataOutputCnt' => 'data_output_cnt',
            'datasetName' => 'dataset_name',
            'partnerDomainAlias' => 'partner_domain_alias',
            'partnerDomainName' => 'partner_domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentName  数据集所在代理
    * dataOutputCnt  代理输出数据总量
    * datasetName  数据集名
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    *
    * @var string[]
    */
    protected static $setters = [
            'agentName' => 'setAgentName',
            'dataOutputCnt' => 'setDataOutputCnt',
            'datasetName' => 'setDatasetName',
            'partnerDomainAlias' => 'setPartnerDomainAlias',
            'partnerDomainName' => 'setPartnerDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentName  数据集所在代理
    * dataOutputCnt  代理输出数据总量
    * datasetName  数据集名
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    *
    * @var string[]
    */
    protected static $getters = [
            'agentName' => 'getAgentName',
            'dataOutputCnt' => 'getDataOutputCnt',
            'datasetName' => 'getDatasetName',
            'partnerDomainAlias' => 'getPartnerDomainAlias',
            'partnerDomainName' => 'getPartnerDomainName'
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
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['dataOutputCnt'] = isset($data['dataOutputCnt']) ? $data['dataOutputCnt'] : null;
        $this->container['datasetName'] = isset($data['datasetName']) ? $data['datasetName'] : null;
        $this->container['partnerDomainAlias'] = isset($data['partnerDomainAlias']) ? $data['partnerDomainAlias'] : null;
        $this->container['partnerDomainName'] = isset($data['partnerDomainName']) ? $data['partnerDomainName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataOutputCnt']) && ($this->container['dataOutputCnt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'dataOutputCnt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['dataOutputCnt']) && ($this->container['dataOutputCnt'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataOutputCnt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasetName']) && (mb_strlen($this->container['datasetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'datasetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['datasetName']) && (mb_strlen($this->container['datasetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partnerDomainAlias']) && (mb_strlen($this->container['partnerDomainAlias']) > 128)) {
                $invalidProperties[] = "invalid value for 'partnerDomainAlias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['partnerDomainAlias']) && (mb_strlen($this->container['partnerDomainAlias']) < 0)) {
                $invalidProperties[] = "invalid value for 'partnerDomainAlias', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partnerDomainName']) && (mb_strlen($this->container['partnerDomainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'partnerDomainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['partnerDomainName']) && (mb_strlen($this->container['partnerDomainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'partnerDomainName', the character length must be bigger than or equal to 0.";
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
    * Gets agentName
    *  数据集所在代理
    *
    * @return string|null
    */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
    * Sets agentName
    *
    * @param string|null $agentName 数据集所在代理
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets dataOutputCnt
    *  代理输出数据总量
    *
    * @return int|null
    */
    public function getDataOutputCnt()
    {
        return $this->container['dataOutputCnt'];
    }

    /**
    * Sets dataOutputCnt
    *
    * @param int|null $dataOutputCnt 代理输出数据总量
    *
    * @return $this
    */
    public function setDataOutputCnt($dataOutputCnt)
    {
        $this->container['dataOutputCnt'] = $dataOutputCnt;
        return $this;
    }

    /**
    * Gets datasetName
    *  数据集名
    *
    * @return string|null
    */
    public function getDatasetName()
    {
        return $this->container['datasetName'];
    }

    /**
    * Sets datasetName
    *
    * @param string|null $datasetName 数据集名
    *
    * @return $this
    */
    public function setDatasetName($datasetName)
    {
        $this->container['datasetName'] = $datasetName;
        return $this;
    }

    /**
    * Gets partnerDomainAlias
    *  租户别名
    *
    * @return string|null
    */
    public function getPartnerDomainAlias()
    {
        return $this->container['partnerDomainAlias'];
    }

    /**
    * Sets partnerDomainAlias
    *
    * @param string|null $partnerDomainAlias 租户别名
    *
    * @return $this
    */
    public function setPartnerDomainAlias($partnerDomainAlias)
    {
        $this->container['partnerDomainAlias'] = $partnerDomainAlias;
        return $this;
    }

    /**
    * Gets partnerDomainName
    *  租户名
    *
    * @return string|null
    */
    public function getPartnerDomainName()
    {
        return $this->container['partnerDomainName'];
    }

    /**
    * Sets partnerDomainName
    *
    * @param string|null $partnerDomainName 租户名
    *
    * @return $this
    */
    public function setPartnerDomainName($partnerDomainName)
    {
        $this->container['partnerDomainName'] = $partnerDomainName;
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

