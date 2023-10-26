<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAppByNameResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAppByNameResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aomId  aomId，如果为空则不显示
    * appId  应用ID
    * createTime  创建时间
    * creator  创建人
    * description  描述
    * displayName  应用名称
    * epsId  企业项目id
    * modifiedTime  修改时间
    * modifier  修改人
    * name  唯一标识
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aomId' => 'string',
            'appId' => 'string',
            'createTime' => 'string',
            'creator' => 'string',
            'description' => 'string',
            'displayName' => 'string',
            'epsId' => 'string',
            'modifiedTime' => 'string',
            'modifier' => 'string',
            'name' => 'string',
            'registerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aomId  aomId，如果为空则不显示
    * appId  应用ID
    * createTime  创建时间
    * creator  创建人
    * description  描述
    * displayName  应用名称
    * epsId  企业项目id
    * modifiedTime  修改时间
    * modifier  修改人
    * name  唯一标识
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aomId' => null,
        'appId' => null,
        'createTime' => null,
        'creator' => null,
        'description' => null,
        'displayName' => null,
        'epsId' => null,
        'modifiedTime' => null,
        'modifier' => null,
        'name' => null,
        'registerType' => null
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
    * aomId  aomId，如果为空则不显示
    * appId  应用ID
    * createTime  创建时间
    * creator  创建人
    * description  描述
    * displayName  应用名称
    * epsId  企业项目id
    * modifiedTime  修改时间
    * modifier  修改人
    * name  唯一标识
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aomId' => 'aom_id',
            'appId' => 'app_id',
            'createTime' => 'create_time',
            'creator' => 'creator',
            'description' => 'description',
            'displayName' => 'display_name',
            'epsId' => 'eps_id',
            'modifiedTime' => 'modified_time',
            'modifier' => 'modifier',
            'name' => 'name',
            'registerType' => 'register_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aomId  aomId，如果为空则不显示
    * appId  应用ID
    * createTime  创建时间
    * creator  创建人
    * description  描述
    * displayName  应用名称
    * epsId  企业项目id
    * modifiedTime  修改时间
    * modifier  修改人
    * name  唯一标识
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $setters = [
            'aomId' => 'setAomId',
            'appId' => 'setAppId',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'description' => 'setDescription',
            'displayName' => 'setDisplayName',
            'epsId' => 'setEpsId',
            'modifiedTime' => 'setModifiedTime',
            'modifier' => 'setModifier',
            'name' => 'setName',
            'registerType' => 'setRegisterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aomId  aomId，如果为空则不显示
    * appId  应用ID
    * createTime  创建时间
    * creator  创建人
    * description  描述
    * displayName  应用名称
    * epsId  企业项目id
    * modifiedTime  修改时间
    * modifier  修改人
    * name  唯一标识
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $getters = [
            'aomId' => 'getAomId',
            'appId' => 'getAppId',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'description' => 'getDescription',
            'displayName' => 'getDisplayName',
            'epsId' => 'getEpsId',
            'modifiedTime' => 'getModifiedTime',
            'modifier' => 'getModifier',
            'name' => 'getName',
            'registerType' => 'getRegisterType'
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
    const REGISTER_TYPE_API = 'API';
    const REGISTER_TYPE_CONSOLE = 'CONSOLE';
    const REGISTER_TYPE_SERVICE_DISCOVERY = 'SERVICE_DISCOVERY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegisterTypeAllowableValues()
    {
        return [
            self::REGISTER_TYPE_API,
            self::REGISTER_TYPE_CONSOLE,
            self::REGISTER_TYPE_SERVICE_DISCOVERY,
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
        $this->container['aomId'] = isset($data['aomId']) ? $data['aomId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registerType'] = isset($data['registerType']) ? $data['registerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRegisterTypeAllowableValues();
                if (!is_null($this->container['registerType']) && !in_array($this->container['registerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'registerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets aomId
    *  aomId，如果为空则不显示
    *
    * @return string|null
    */
    public function getAomId()
    {
        return $this->container['aomId'];
    }

    /**
    * Sets aomId
    *
    * @param string|null $aomId aomId，如果为空则不显示
    *
    * @return $this
    */
    public function setAomId($aomId)
    {
        $this->container['aomId'] = $aomId;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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
    * Gets displayName
    *  应用名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 应用名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  修改时间
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime 修改时间
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets modifier
    *  修改人
    *
    * @return string|null
    */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
    * Sets modifier
    *
    * @param string|null $modifier 修改人
    *
    * @return $this
    */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;
        return $this;
    }

    /**
    * Gets name
    *  唯一标识
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
    * @param string|null $name 唯一标识
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets registerType
    *  注册方式
    *
    * @return string|null
    */
    public function getRegisterType()
    {
        return $this->container['registerType'];
    }

    /**
    * Sets registerType
    *
    * @param string|null $registerType 注册方式
    *
    * @return $this
    */
    public function setRegisterType($registerType)
    {
        $this->container['registerType'] = $registerType;
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

