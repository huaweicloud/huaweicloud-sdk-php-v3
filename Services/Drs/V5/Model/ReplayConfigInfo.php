<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbInstanceId  源实例ID。
    * cloudType  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    * ak  其他云AK信息。
    * sk  其他云SK信息。
    * dbSource  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    * region  其他云Region名称。
    * trafficSource  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbInstanceId' => 'string',
            'cloudType' => 'string',
            'ak' => 'string',
            'sk' => 'string',
            'dbSource' => 'string',
            'region' => 'string',
            'trafficSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbInstanceId  源实例ID。
    * cloudType  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    * ak  其他云AK信息。
    * sk  其他云SK信息。
    * dbSource  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    * region  其他云Region名称。
    * trafficSource  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbInstanceId' => null,
        'cloudType' => null,
        'ak' => null,
        'sk' => null,
        'dbSource' => null,
        'region' => null,
        'trafficSource' => null
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
    * dbInstanceId  源实例ID。
    * cloudType  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    * ak  其他云AK信息。
    * sk  其他云SK信息。
    * dbSource  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    * region  其他云Region名称。
    * trafficSource  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbInstanceId' => 'db_instance_id',
            'cloudType' => 'cloud_type',
            'ak' => 'ak',
            'sk' => 'sk',
            'dbSource' => 'db_source',
            'region' => 'region',
            'trafficSource' => 'traffic_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbInstanceId  源实例ID。
    * cloudType  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    * ak  其他云AK信息。
    * sk  其他云SK信息。
    * dbSource  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    * region  其他云Region名称。
    * trafficSource  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbInstanceId' => 'setDbInstanceId',
            'cloudType' => 'setCloudType',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'dbSource' => 'setDbSource',
            'region' => 'setRegion',
            'trafficSource' => 'setTrafficSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbInstanceId  源实例ID。
    * cloudType  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    * ak  其他云AK信息。
    * sk  其他云SK信息。
    * dbSource  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    * region  其他云Region名称。
    * trafficSource  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbInstanceId' => 'getDbInstanceId',
            'cloudType' => 'getCloudType',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'dbSource' => 'getDbSource',
            'region' => 'getRegion',
            'trafficSource' => 'getTrafficSource'
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
    const CLOUD_TYPE_AWS_CLOUD = 'AWSCloud';
    const CLOUD_TYPE_TENCENT_CLOUD = 'TencentCloud';
    const CLOUD_TYPE_ALI_CLOUD = 'AliCloud';
    const DB_SOURCE_AWS_AURORA_MYSQL = 'aws_aurora_mysql';
    const DB_SOURCE_TENCENT_TDSQL_C = 'tencent_tdsql_c';
    const DB_SOURCE_ALI_RDS_MYSQL = 'ali_rds_mysql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloudTypeAllowableValues()
    {
        return [
            self::CLOUD_TYPE_AWS_CLOUD,
            self::CLOUD_TYPE_TENCENT_CLOUD,
            self::CLOUD_TYPE_ALI_CLOUD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbSourceAllowableValues()
    {
        return [
            self::DB_SOURCE_AWS_AURORA_MYSQL,
            self::DB_SOURCE_TENCENT_TDSQL_C,
            self::DB_SOURCE_ALI_RDS_MYSQL,
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
        $this->container['dbInstanceId'] = isset($data['dbInstanceId']) ? $data['dbInstanceId'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['dbSource'] = isset($data['dbSource']) ? $data['dbSource'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['trafficSource'] = isset($data['trafficSource']) ? $data['trafficSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbInstanceId'] === null) {
            $invalidProperties[] = "'dbInstanceId' can't be null";
        }
        if ($this->container['cloudType'] === null) {
            $invalidProperties[] = "'cloudType' can't be null";
        }
            $allowedValues = $this->getCloudTypeAllowableValues();
                if (!is_null($this->container['cloudType']) && !in_array($this->container['cloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ak'] === null) {
            $invalidProperties[] = "'ak' can't be null";
        }
        if ($this->container['sk'] === null) {
            $invalidProperties[] = "'sk' can't be null";
        }
        if ($this->container['dbSource'] === null) {
            $invalidProperties[] = "'dbSource' can't be null";
        }
            $allowedValues = $this->getDbSourceAllowableValues();
                if (!is_null($this->container['dbSource']) && !in_array($this->container['dbSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['trafficSource'] === null) {
            $invalidProperties[] = "'trafficSource' can't be null";
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
    * Gets dbInstanceId
    *  源实例ID。
    *
    * @return string
    */
    public function getDbInstanceId()
    {
        return $this->container['dbInstanceId'];
    }

    /**
    * Sets dbInstanceId
    *
    * @param string $dbInstanceId 源实例ID。
    *
    * @return $this
    */
    public function setDbInstanceId($dbInstanceId)
    {
        $this->container['dbInstanceId'] = $dbInstanceId;
        return $this;
    }

    /**
    * Gets cloudType
    *  云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    *
    * @return string
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string $cloudType 云类型： - AWSCloud：亚马逊云。 - TencentCloud：腾讯云。 - AliCloud：阿里云。
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets ak
    *  其他云AK信息。
    *
    * @return string
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string $ak 其他云AK信息。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  其他云SK信息。
    *
    * @return string
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string $sk 其他云SK信息。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
        return $this;
    }

    /**
    * Gets dbSource
    *  源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    *
    * @return string
    */
    public function getDbSource()
    {
        return $this->container['dbSource'];
    }

    /**
    * Sets dbSource
    *
    * @param string $dbSource 源数据库来源。取值： - aws_aurora_mysql：Amazon Aurora MySQL。 - tencent_tdsql_c：腾讯云TDSQL-C MySQL。 - ali_rds_mysql：阿里云RDS MySQL。
    *
    * @return $this
    */
    public function setDbSource($dbSource)
    {
        $this->container['dbSource'] = $dbSource;
        return $this;
    }

    /**
    * Gets region
    *  其他云Region名称。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 其他云Region名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets trafficSource
    *  流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @return string
    */
    public function getTrafficSource()
    {
        return $this->container['trafficSource'];
    }

    /**
    * Sets trafficSource
    *
    * @param string $trafficSource 流量文件来源。 - sdk：通过三方云API接口方式下载审计日志。
    *
    * @return $this
    */
    public function setTrafficSource($trafficSource)
    {
        $this->container['trafficSource'] = $trafficSource;
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

