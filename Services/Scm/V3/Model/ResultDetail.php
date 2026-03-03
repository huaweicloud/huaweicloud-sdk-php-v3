<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResultDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResultDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateId  证书ID。
    * totalNum  当前证书在所查询服务中已部署资源总数。
    * deployedResources  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateId' => 'string',
            'totalNum' => 'int',
            'deployedResources' => '\HuaweiCloud\SDK\Scm\V3\Model\DeployedResourceDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateId  证书ID。
    * totalNum  当前证书在所查询服务中已部署资源总数。
    * deployedResources  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateId' => null,
        'totalNum' => null,
        'deployedResources' => null
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
    * certificateId  证书ID。
    * totalNum  当前证书在所查询服务中已部署资源总数。
    * deployedResources  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateId' => 'certificate_id',
            'totalNum' => 'total_num',
            'deployedResources' => 'deployed_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateId  证书ID。
    * totalNum  当前证书在所查询服务中已部署资源总数。
    * deployedResources  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateId' => 'setCertificateId',
            'totalNum' => 'setTotalNum',
            'deployedResources' => 'setDeployedResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateId  证书ID。
    * totalNum  当前证书在所查询服务中已部署资源总数。
    * deployedResources  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateId' => 'getCertificateId',
            'totalNum' => 'getTotalNum',
            'deployedResources' => 'getDeployedResources'
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
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['deployedResources'] = isset($data['deployedResources']) ? $data['deployedResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateId'] === null) {
            $invalidProperties[] = "'certificateId' can't be null";
        }
            if ((mb_strlen($this->container['certificateId']) > 16)) {
                $invalidProperties[] = "invalid value for 'certificateId', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['certificateId']) < 16)) {
                $invalidProperties[] = "invalid value for 'certificateId', the character length must be bigger than or equal to 16.";
            }
        if ($this->container['totalNum'] === null) {
            $invalidProperties[] = "'totalNum' can't be null";
        }
            if (($this->container['totalNum'] > 1000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 1000.";
            }
            if (($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
        if ($this->container['deployedResources'] === null) {
            $invalidProperties[] = "'deployedResources' can't be null";
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
    * Gets certificateId
    *  证书ID。
    *
    * @return string
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string $certificateId 证书ID。
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets totalNum
    *  当前证书在所查询服务中已部署资源总数。
    *
    * @return int
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int $totalNum 当前证书在所查询服务中已部署资源总数。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets deployedResources
    *  当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\DeployedResourceDetail[]
    */
    public function getDeployedResources()
    {
        return $this->container['deployedResources'];
    }

    /**
    * Sets deployedResources
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\DeployedResourceDetail[] $deployedResources 当前证书已部署资源列表，详情请参见DeployedResourceDetail字段数据结构说明。
    *
    * @return $this
    */
    public function setDeployedResources($deployedResources)
    {
        $this->container['deployedResources'] = $deployedResources;
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

