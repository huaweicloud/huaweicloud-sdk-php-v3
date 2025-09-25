<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartManualSecurityCheckRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartManualSecurityCheckRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    * operateAll  服务器是否选择全部，全选跟查询条件无关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string[]',
            'hostIdList' => 'string[]',
            'operateAll' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    * operateAll  服务器是否选择全部，全选跟查询条件无关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'hostIdList' => null,
        'operateAll' => null
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
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    * operateAll  服务器是否选择全部，全选跟查询条件无关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'hostIdList' => 'host_id_list',
            'operateAll' => 'operate_all'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    * operateAll  服务器是否选择全部，全选跟查询条件无关
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'hostIdList' => 'setHostIdList',
            'operateAll' => 'setOperateAll'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    * operateAll  服务器是否选择全部，全选跟查询条件无关
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'hostIdList' => 'getHostIdList',
            'operateAll' => 'getOperateAll'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets content
    *  体检内容，取值包含：asset,vul,baseline,event
    *
    * @return string[]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string[]|null $content 体检内容，取值包含：asset,vul,baseline,event
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets hostIdList
    *  已选服务器ID列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 已选服务器ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets operateAll
    *  服务器是否选择全部，全选跟查询条件无关
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll 服务器是否选择全部，全选跟查询条件无关
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
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

