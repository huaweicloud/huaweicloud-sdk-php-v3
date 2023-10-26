<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Links implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'links';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * linkConfigValues  linkConfigValues
    * creationUser  创建连接的用户
    * name  连接名称
    * id  连接ID
    * creationDate  创建连接的时间
    * connectorName  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    * updateDate  更新连接的时间
    * enabled  是否激活连接，默认为“true”
    * updateUser  更新连接的用户
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'linkConfigValues' => '\HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvalues',
            'creationUser' => 'string',
            'name' => 'string',
            'id' => 'int',
            'creationDate' => 'int',
            'connectorName' => 'string',
            'updateDate' => 'int',
            'enabled' => 'bool',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * linkConfigValues  linkConfigValues
    * creationUser  创建连接的用户
    * name  连接名称
    * id  连接ID
    * creationDate  创建连接的时间
    * connectorName  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    * updateDate  更新连接的时间
    * enabled  是否激活连接，默认为“true”
    * updateUser  更新连接的用户
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'linkConfigValues' => null,
        'creationUser' => null,
        'name' => null,
        'id' => 'int32',
        'creationDate' => 'int64',
        'connectorName' => null,
        'updateDate' => 'int64',
        'enabled' => null,
        'updateUser' => null
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
    * linkConfigValues  linkConfigValues
    * creationUser  创建连接的用户
    * name  连接名称
    * id  连接ID
    * creationDate  创建连接的时间
    * connectorName  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    * updateDate  更新连接的时间
    * enabled  是否激活连接，默认为“true”
    * updateUser  更新连接的用户
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'linkConfigValues' => 'link-config-values',
            'creationUser' => 'creation-user',
            'name' => 'name',
            'id' => 'id',
            'creationDate' => 'creation-date',
            'connectorName' => 'connector-name',
            'updateDate' => 'update-date',
            'enabled' => 'enabled',
            'updateUser' => 'update-user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * linkConfigValues  linkConfigValues
    * creationUser  创建连接的用户
    * name  连接名称
    * id  连接ID
    * creationDate  创建连接的时间
    * connectorName  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    * updateDate  更新连接的时间
    * enabled  是否激活连接，默认为“true”
    * updateUser  更新连接的用户
    *
    * @var string[]
    */
    protected static $setters = [
            'linkConfigValues' => 'setLinkConfigValues',
            'creationUser' => 'setCreationUser',
            'name' => 'setName',
            'id' => 'setId',
            'creationDate' => 'setCreationDate',
            'connectorName' => 'setConnectorName',
            'updateDate' => 'setUpdateDate',
            'enabled' => 'setEnabled',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * linkConfigValues  linkConfigValues
    * creationUser  创建连接的用户
    * name  连接名称
    * id  连接ID
    * creationDate  创建连接的时间
    * connectorName  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    * updateDate  更新连接的时间
    * enabled  是否激活连接，默认为“true”
    * updateUser  更新连接的用户
    *
    * @var string[]
    */
    protected static $getters = [
            'linkConfigValues' => 'getLinkConfigValues',
            'creationUser' => 'getCreationUser',
            'name' => 'getName',
            'id' => 'getId',
            'creationDate' => 'getCreationDate',
            'connectorName' => 'getConnectorName',
            'updateDate' => 'getUpdateDate',
            'enabled' => 'getEnabled',
            'updateUser' => 'getUpdateUser'
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
        $this->container['linkConfigValues'] = isset($data['linkConfigValues']) ? $data['linkConfigValues'] : null;
        $this->container['creationUser'] = isset($data['creationUser']) ? $data['creationUser'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['connectorName'] = isset($data['connectorName']) ? $data['connectorName'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['linkConfigValues'] === null) {
            $invalidProperties[] = "'linkConfigValues' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['connectorName'] === null) {
            $invalidProperties[] = "'connectorName' can't be null";
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
    * Gets linkConfigValues
    *  linkConfigValues
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvalues
    */
    public function getLinkConfigValues()
    {
        return $this->container['linkConfigValues'];
    }

    /**
    * Sets linkConfigValues
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvalues $linkConfigValues linkConfigValues
    *
    * @return $this
    */
    public function setLinkConfigValues($linkConfigValues)
    {
        $this->container['linkConfigValues'] = $linkConfigValues;
        return $this;
    }

    /**
    * Gets creationUser
    *  创建连接的用户
    *
    * @return string|null
    */
    public function getCreationUser()
    {
        return $this->container['creationUser'];
    }

    /**
    * Sets creationUser
    *
    * @param string|null $creationUser 创建连接的用户
    *
    * @return $this
    */
    public function setCreationUser($creationUser)
    {
        $this->container['creationUser'] = $creationUser;
        return $this;
    }

    /**
    * Gets name
    *  连接名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 连接名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  连接ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 连接ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建连接的时间
    *
    * @return int|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param int|null $creationDate 创建连接的时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets connectorName
    *  连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    *
    * @return string
    */
    public function getConnectorName()
    {
        return $this->container['connectorName'];
    }

    /**
    * Sets connectorName
    *
    * @param string $connectorName 连接器名称，对应的连接参数如下：generic-jdbc-connector：关系数据库连接。obs-connector：OBS连接、阿里云OSS连接。hdfs-connector：HDFS连接。hbase-connector：HBase连接、CloudTable连接。hive-connector：Hive连接。ftp-connector/sftp-connector：FTP/SFTP连接。mongodb-connector：MongoDB连接。redis-connector：Redis/DCS连接。nas-connector：NAS/SFS连接。kafka-connector：Kafka连接。dis-connector：DIS连接。elasticsearch-connector：Elasticsearch/云搜索服务连接。dli-connector：DLI连接。opentsdb-connector：CloudTable OpenTSDB连接。http-connector：HTTP/HTTPS连接，该连接暂无连接参数。thirdparty-obs-connector：七牛云KODO/腾讯云COS连接、亚马逊对象存储连接。dms-kafka-connector：DMS Kafka连接
    *
    * @return $this
    */
    public function setConnectorName($connectorName)
    {
        $this->container['connectorName'] = $connectorName;
        return $this;
    }

    /**
    * Gets updateDate
    *  更新连接的时间
    *
    * @return int|null
    */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
    * Sets updateDate
    *
    * @param int|null $updateDate 更新连接的时间
    *
    * @return $this
    */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;
        return $this;
    }

    /**
    * Gets enabled
    *  是否激活连接，默认为“true”
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否激活连接，默认为“true”
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新连接的用户
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新连接的用户
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

