<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateRO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateRO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  template id
    * name  template name
    * directoryId  目录
    * dimensionId  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    * description  描述
    * sqlInfo  模板中的sql内容
    * resultDescription  结果说明
    * publish  是否是发布操作， true：发布新版本  false：普通的保存操作
    * originName  修改前的模板名
    * abnormalTableTemplate  异常表模板
    * userDefineVersionName  用户自定义版本名
    * versionNum  获取模板信息时候的版本号
    * status  规则模板状态,0表示下线1表示已发布
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'directoryId' => 'int',
            'dimensionId' => 'int',
            'description' => 'string',
            'sqlInfo' => 'string',
            'resultDescription' => 'string',
            'publish' => 'bool',
            'originName' => 'string',
            'abnormalTableTemplate' => 'string',
            'userDefineVersionName' => 'string',
            'versionNum' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  template id
    * name  template name
    * directoryId  目录
    * dimensionId  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    * description  描述
    * sqlInfo  模板中的sql内容
    * resultDescription  结果说明
    * publish  是否是发布操作， true：发布新版本  false：普通的保存操作
    * originName  修改前的模板名
    * abnormalTableTemplate  异常表模板
    * userDefineVersionName  用户自定义版本名
    * versionNum  获取模板信息时候的版本号
    * status  规则模板状态,0表示下线1表示已发布
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'directoryId' => 'int64',
        'dimensionId' => 'int32',
        'description' => null,
        'sqlInfo' => null,
        'resultDescription' => null,
        'publish' => null,
        'originName' => null,
        'abnormalTableTemplate' => null,
        'userDefineVersionName' => null,
        'versionNum' => 'int64',
        'status' => 'int32'
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
    * id  template id
    * name  template name
    * directoryId  目录
    * dimensionId  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    * description  描述
    * sqlInfo  模板中的sql内容
    * resultDescription  结果说明
    * publish  是否是发布操作， true：发布新版本  false：普通的保存操作
    * originName  修改前的模板名
    * abnormalTableTemplate  异常表模板
    * userDefineVersionName  用户自定义版本名
    * versionNum  获取模板信息时候的版本号
    * status  规则模板状态,0表示下线1表示已发布
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'directoryId' => 'directory_id',
            'dimensionId' => 'dimension_id',
            'description' => 'description',
            'sqlInfo' => 'sql_info',
            'resultDescription' => 'result_description',
            'publish' => 'publish',
            'originName' => 'origin_name',
            'abnormalTableTemplate' => 'abnormal_table_template',
            'userDefineVersionName' => 'user_define_version_name',
            'versionNum' => 'version_num',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  template id
    * name  template name
    * directoryId  目录
    * dimensionId  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    * description  描述
    * sqlInfo  模板中的sql内容
    * resultDescription  结果说明
    * publish  是否是发布操作， true：发布新版本  false：普通的保存操作
    * originName  修改前的模板名
    * abnormalTableTemplate  异常表模板
    * userDefineVersionName  用户自定义版本名
    * versionNum  获取模板信息时候的版本号
    * status  规则模板状态,0表示下线1表示已发布
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'directoryId' => 'setDirectoryId',
            'dimensionId' => 'setDimensionId',
            'description' => 'setDescription',
            'sqlInfo' => 'setSqlInfo',
            'resultDescription' => 'setResultDescription',
            'publish' => 'setPublish',
            'originName' => 'setOriginName',
            'abnormalTableTemplate' => 'setAbnormalTableTemplate',
            'userDefineVersionName' => 'setUserDefineVersionName',
            'versionNum' => 'setVersionNum',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  template id
    * name  template name
    * directoryId  目录
    * dimensionId  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    * description  描述
    * sqlInfo  模板中的sql内容
    * resultDescription  结果说明
    * publish  是否是发布操作， true：发布新版本  false：普通的保存操作
    * originName  修改前的模板名
    * abnormalTableTemplate  异常表模板
    * userDefineVersionName  用户自定义版本名
    * versionNum  获取模板信息时候的版本号
    * status  规则模板状态,0表示下线1表示已发布
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'directoryId' => 'getDirectoryId',
            'dimensionId' => 'getDimensionId',
            'description' => 'getDescription',
            'sqlInfo' => 'getSqlInfo',
            'resultDescription' => 'getResultDescription',
            'publish' => 'getPublish',
            'originName' => 'getOriginName',
            'abnormalTableTemplate' => 'getAbnormalTableTemplate',
            'userDefineVersionName' => 'getUserDefineVersionName',
            'versionNum' => 'getVersionNum',
            'status' => 'getStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['dimensionId'] = isset($data['dimensionId']) ? $data['dimensionId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sqlInfo'] = isset($data['sqlInfo']) ? $data['sqlInfo'] : null;
        $this->container['resultDescription'] = isset($data['resultDescription']) ? $data['resultDescription'] : null;
        $this->container['publish'] = isset($data['publish']) ? $data['publish'] : null;
        $this->container['originName'] = isset($data['originName']) ? $data['originName'] : null;
        $this->container['abnormalTableTemplate'] = isset($data['abnormalTableTemplate']) ? $data['abnormalTableTemplate'] : null;
        $this->container['userDefineVersionName'] = isset($data['userDefineVersionName']) ? $data['userDefineVersionName'] : null;
        $this->container['versionNum'] = isset($data['versionNum']) ? $data['versionNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sqlInfo']) && (mb_strlen($this->container['sqlInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalTableTemplate']) && (mb_strlen($this->container['abnormalTableTemplate']) < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalTableTemplate', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  template id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id template id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  template name
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name template name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets directoryId
    *  目录
    *
    * @return int|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param int|null $directoryId 目录
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets dimensionId
    *  维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    *
    * @return int|null
    */
    public function getDimensionId()
    {
        return $this->container['dimensionId'];
    }

    /**
    * Sets dimensionId
    *
    * @param int|null $dimensionId 维度ID, 1:完整性,2:唯一性,3:及时性,4:有效性,5:准确性,6:一致性
    *
    * @return $this
    */
    public function setDimensionId($dimensionId)
    {
        $this->container['dimensionId'] = $dimensionId;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sqlInfo
    *  模板中的sql内容
    *
    * @return string|null
    */
    public function getSqlInfo()
    {
        return $this->container['sqlInfo'];
    }

    /**
    * Sets sqlInfo
    *
    * @param string|null $sqlInfo 模板中的sql内容
    *
    * @return $this
    */
    public function setSqlInfo($sqlInfo)
    {
        $this->container['sqlInfo'] = $sqlInfo;
        return $this;
    }

    /**
    * Gets resultDescription
    *  结果说明
    *
    * @return string|null
    */
    public function getResultDescription()
    {
        return $this->container['resultDescription'];
    }

    /**
    * Sets resultDescription
    *
    * @param string|null $resultDescription 结果说明
    *
    * @return $this
    */
    public function setResultDescription($resultDescription)
    {
        $this->container['resultDescription'] = $resultDescription;
        return $this;
    }

    /**
    * Gets publish
    *  是否是发布操作， true：发布新版本  false：普通的保存操作
    *
    * @return bool|null
    */
    public function getPublish()
    {
        return $this->container['publish'];
    }

    /**
    * Sets publish
    *
    * @param bool|null $publish 是否是发布操作， true：发布新版本  false：普通的保存操作
    *
    * @return $this
    */
    public function setPublish($publish)
    {
        $this->container['publish'] = $publish;
        return $this;
    }

    /**
    * Gets originName
    *  修改前的模板名
    *
    * @return string|null
    */
    public function getOriginName()
    {
        return $this->container['originName'];
    }

    /**
    * Sets originName
    *
    * @param string|null $originName 修改前的模板名
    *
    * @return $this
    */
    public function setOriginName($originName)
    {
        $this->container['originName'] = $originName;
        return $this;
    }

    /**
    * Gets abnormalTableTemplate
    *  异常表模板
    *
    * @return string|null
    */
    public function getAbnormalTableTemplate()
    {
        return $this->container['abnormalTableTemplate'];
    }

    /**
    * Sets abnormalTableTemplate
    *
    * @param string|null $abnormalTableTemplate 异常表模板
    *
    * @return $this
    */
    public function setAbnormalTableTemplate($abnormalTableTemplate)
    {
        $this->container['abnormalTableTemplate'] = $abnormalTableTemplate;
        return $this;
    }

    /**
    * Gets userDefineVersionName
    *  用户自定义版本名
    *
    * @return string|null
    */
    public function getUserDefineVersionName()
    {
        return $this->container['userDefineVersionName'];
    }

    /**
    * Sets userDefineVersionName
    *
    * @param string|null $userDefineVersionName 用户自定义版本名
    *
    * @return $this
    */
    public function setUserDefineVersionName($userDefineVersionName)
    {
        $this->container['userDefineVersionName'] = $userDefineVersionName;
        return $this;
    }

    /**
    * Gets versionNum
    *  获取模板信息时候的版本号
    *
    * @return int|null
    */
    public function getVersionNum()
    {
        return $this->container['versionNum'];
    }

    /**
    * Sets versionNum
    *
    * @param int|null $versionNum 获取模板信息时候的版本号
    *
    * @return $this
    */
    public function setVersionNum($versionNum)
    {
        $this->container['versionNum'] = $versionNum;
        return $this;
    }

    /**
    * Gets status
    *  规则模板状态,0表示下线1表示已发布
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 规则模板状态,0表示下线1表示已发布
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

