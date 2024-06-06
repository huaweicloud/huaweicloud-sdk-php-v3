<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeSize  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * dataVolumeType  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  Task节点数据磁盘存储数目，取值范围：0～20。
    * dataVolumeSize  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeSize' => 'string',
            'dataVolumeType' => 'string',
            'dataVolumeCount' => 'int',
            'dataVolumeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeSize  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * dataVolumeType  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  Task节点数据磁盘存储数目，取值范围：0～20。
    * dataVolumeSize  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeSize' => null,
        'dataVolumeType' => null,
        'dataVolumeCount' => 'int32',
        'dataVolumeSize' => 'int32'
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
    * nodeSize  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * dataVolumeType  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  Task节点数据磁盘存储数目，取值范围：0～20。
    * dataVolumeSize  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeSize' => 'node_size',
            'dataVolumeType' => 'data_volume_type',
            'dataVolumeCount' => 'data_volume_count',
            'dataVolumeSize' => 'data_volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeSize  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * dataVolumeType  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  Task节点数据磁盘存储数目，取值范围：0～20。
    * dataVolumeSize  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeSize' => 'setNodeSize',
            'dataVolumeType' => 'setDataVolumeType',
            'dataVolumeCount' => 'setDataVolumeCount',
            'dataVolumeSize' => 'setDataVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeSize  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * dataVolumeType  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  Task节点数据磁盘存储数目，取值范围：0～20。
    * dataVolumeSize  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeSize' => 'getNodeSize',
            'dataVolumeType' => 'getDataVolumeType',
            'dataVolumeCount' => 'getDataVolumeCount',
            'dataVolumeSize' => 'getDataVolumeSize'
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
    const DATA_VOLUME_TYPE_SATA = 'SATA';
    const DATA_VOLUME_TYPE_SAS = 'SAS';
    const DATA_VOLUME_TYPE_SSD = 'SSD';
    const DATA_VOLUME_TYPE_GPSSD = 'GPSSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataVolumeTypeAllowableValues()
    {
        return [
            self::DATA_VOLUME_TYPE_SATA,
            self::DATA_VOLUME_TYPE_SAS,
            self::DATA_VOLUME_TYPE_SSD,
            self::DATA_VOLUME_TYPE_GPSSD,
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
        $this->container['nodeSize'] = isset($data['nodeSize']) ? $data['nodeSize'] : null;
        $this->container['dataVolumeType'] = isset($data['dataVolumeType']) ? $data['dataVolumeType'] : null;
        $this->container['dataVolumeCount'] = isset($data['dataVolumeCount']) ? $data['dataVolumeCount'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeSize'] === null) {
            $invalidProperties[] = "'nodeSize' can't be null";
        }
        if ($this->container['dataVolumeType'] === null) {
            $invalidProperties[] = "'dataVolumeType' can't be null";
        }
            $allowedValues = $this->getDataVolumeTypeAllowableValues();
                if (!is_null($this->container['dataVolumeType']) && !in_array($this->container['dataVolumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataVolumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dataVolumeCount'] === null) {
            $invalidProperties[] = "'dataVolumeCount' can't be null";
        }
            if (($this->container['dataVolumeCount'] > 20)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be smaller than or equal to 20.";
            }
            if (($this->container['dataVolumeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be bigger than or equal to 0.";
            }
        if ($this->container['dataVolumeSize'] === null) {
            $invalidProperties[] = "'dataVolumeSize' can't be null";
        }
            if (($this->container['dataVolumeSize'] > 32000)) {
                $invalidProperties[] = "invalid value for 'dataVolumeSize', must be smaller than or equal to 32000.";
            }
            if (($this->container['dataVolumeSize'] < 100)) {
                $invalidProperties[] = "invalid value for 'dataVolumeSize', must be bigger than or equal to 100.";
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
    * Gets nodeSize
    *  Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return string
    */
    public function getNodeSize()
    {
        return $this->container['nodeSize'];
    }

    /**
    * Sets nodeSize
    *
    * @param string $nodeSize Task节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return $this
    */
    public function setNodeSize($nodeSize)
    {
        $this->container['nodeSize'] = $nodeSize;
        return $this;
    }

    /**
    * Gets dataVolumeType
    *  Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return string
    */
    public function getDataVolumeType()
    {
        return $this->container['dataVolumeType'];
    }

    /**
    * Sets dataVolumeType
    *
    * @param string $dataVolumeType Task节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return $this
    */
    public function setDataVolumeType($dataVolumeType)
    {
        $this->container['dataVolumeType'] = $dataVolumeType;
        return $this;
    }

    /**
    * Gets dataVolumeCount
    *  Task节点数据磁盘存储数目，取值范围：0～20。
    *
    * @return int
    */
    public function getDataVolumeCount()
    {
        return $this->container['dataVolumeCount'];
    }

    /**
    * Sets dataVolumeCount
    *
    * @param int $dataVolumeCount Task节点数据磁盘存储数目，取值范围：0～20。
    *
    * @return $this
    */
    public function setDataVolumeCount($dataVolumeCount)
    {
        $this->container['dataVolumeCount'] = $dataVolumeCount;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return int
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param int $dataVolumeSize Task节点数据磁盘存储大小。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
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

