<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCloudPhoneSingleServerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCloudPhoneSingleServerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverName  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机裸服务器规格名称。
    * count  购买的云手机裸服务器个数，最多可购买10台。
    * orderParam  orderParam
    * nics  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    * publicIp  publicIp
    * availabilityZone  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * dataVolume  dataVolume
    * keypairName  指定登录云手机裸服务器已有密钥的名称。
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * imageId  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverName' => 'string',
            'serverModelName' => 'string',
            'count' => 'int',
            'orderParam' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyOrderParam',
            'nics' => '\HuaweiCloud\SDK\Cph\V1\Model\NicForSingleServer[]',
            'publicIp' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIp',
            'availabilityZone' => 'string',
            'dataVolume' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyDataVolume',
            'keypairName' => 'string',
            'enterpriseProjectId' => 'string',
            'imageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverName  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机裸服务器规格名称。
    * count  购买的云手机裸服务器个数，最多可购买10台。
    * orderParam  orderParam
    * nics  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    * publicIp  publicIp
    * availabilityZone  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * dataVolume  dataVolume
    * keypairName  指定登录云手机裸服务器已有密钥的名称。
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * imageId  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverName' => null,
        'serverModelName' => null,
        'count' => 'int32',
        'orderParam' => null,
        'nics' => null,
        'publicIp' => null,
        'availabilityZone' => null,
        'dataVolume' => null,
        'keypairName' => null,
        'enterpriseProjectId' => null,
        'imageId' => null
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
    * serverName  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机裸服务器规格名称。
    * count  购买的云手机裸服务器个数，最多可购买10台。
    * orderParam  orderParam
    * nics  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    * publicIp  publicIp
    * availabilityZone  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * dataVolume  dataVolume
    * keypairName  指定登录云手机裸服务器已有密钥的名称。
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * imageId  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverName' => 'server_name',
            'serverModelName' => 'server_model_name',
            'count' => 'count',
            'orderParam' => 'order_param',
            'nics' => 'nics',
            'publicIp' => 'public_ip',
            'availabilityZone' => 'availability_zone',
            'dataVolume' => 'data_volume',
            'keypairName' => 'keypair_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageId' => 'image_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverName  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机裸服务器规格名称。
    * count  购买的云手机裸服务器个数，最多可购买10台。
    * orderParam  orderParam
    * nics  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    * publicIp  publicIp
    * availabilityZone  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * dataVolume  dataVolume
    * keypairName  指定登录云手机裸服务器已有密钥的名称。
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * imageId  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverName' => 'setServerName',
            'serverModelName' => 'setServerModelName',
            'count' => 'setCount',
            'orderParam' => 'setOrderParam',
            'nics' => 'setNics',
            'publicIp' => 'setPublicIp',
            'availabilityZone' => 'setAvailabilityZone',
            'dataVolume' => 'setDataVolume',
            'keypairName' => 'setKeypairName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageId' => 'setImageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverName  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机裸服务器规格名称。
    * count  购买的云手机裸服务器个数，最多可购买10台。
    * orderParam  orderParam
    * nics  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    * publicIp  publicIp
    * availabilityZone  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * dataVolume  dataVolume
    * keypairName  指定登录云手机裸服务器已有密钥的名称。
    * enterpriseProjectId  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * imageId  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverName' => 'getServerName',
            'serverModelName' => 'getServerModelName',
            'count' => 'getCount',
            'orderParam' => 'getOrderParam',
            'nics' => 'getNics',
            'publicIp' => 'getPublicIp',
            'availabilityZone' => 'getAvailabilityZone',
            'dataVolume' => 'getDataVolume',
            'keypairName' => 'getKeypairName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageId' => 'getImageId'
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
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['orderParam'] = isset($data['orderParam']) ? $data['orderParam'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['dataVolume'] = isset($data['dataVolume']) ? $data['dataVolume'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverName'] === null) {
            $invalidProperties[] = "'serverName' can't be null";
        }
            if ((mb_strlen($this->container['serverName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serverModelName'] === null) {
            $invalidProperties[] = "'serverModelName' can't be null";
        }
            if ((mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 1024)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1024.";
            }
            if (($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
        if ($this->container['orderParam'] === null) {
            $invalidProperties[] = "'orderParam' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['keypairName'] === null) {
            $invalidProperties[] = "'keypairName' can't be null";
        }
            if ((mb_strlen($this->container['keypairName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['keypairName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
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
    * Gets serverName
    *  云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    *
    * @return string
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string $serverName 云手机裸服务器名称，不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。批量购买会在云手机裸服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机裸服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverModelName
    *  云手机裸服务器规格名称。
    *
    * @return string
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string $serverModelName 云手机裸服务器规格名称。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets count
    *  购买的云手机裸服务器个数，最多可购买10台。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count 购买的云手机裸服务器个数，最多可购买10台。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets orderParam
    *  orderParam
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyOrderParam
    */
    public function getOrderParam()
    {
        return $this->container['orderParam'];
    }

    /**
    * Sets orderParam
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyOrderParam $orderParam orderParam
    *
    * @return $this
    */
    public function setOrderParam($orderParam)
    {
        $this->container['orderParam'] = $orderParam;
        return $this;
    }

    /**
    * Gets nics
    *  租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\NicForSingleServer[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\NicForSingleServer[] $nics 租户自定义的网卡的结构体，为待创建的云手机裸服务器的网卡信息。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIp
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIp $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 待创建云手机裸服务器所在的可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets dataVolume
    *  dataVolume
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyDataVolume|null
    */
    public function getDataVolume()
    {
        return $this->container['dataVolume'];
    }

    /**
    * Sets dataVolume
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyDataVolume|null $dataVolume dataVolume
    *
    * @return $this
    */
    public function setDataVolume($dataVolume)
    {
        $this->container['dataVolume'] = $dataVolume;
        return $this;
    }

    /**
    * Gets keypairName
    *  指定登录云手机裸服务器已有密钥的名称。
    *
    * @return string
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string $keypairName 指定登录云手机裸服务器已有密钥的名称。
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageId
    *  云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 云手机裸服务器镜像ID，不超过36个字节。未指定时使用默认云手机裸服务器镜像。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
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

