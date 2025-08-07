<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepoDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepoDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称。
    * category  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * limit  返回条数，默认返回100条记录，最多返回1000条记录。
    * marker  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    * isPublic  是否公开私有，true为公开，false为私有。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'name' => 'string',
            'category' => 'string',
            'limit' => 'int',
            'marker' => 'int',
            'isPublic' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称。
    * category  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * limit  返回条数，默认返回100条记录，最多返回1000条记录。
    * marker  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    * isPublic  是否公开私有，true为公开，false为私有。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'name' => null,
        'category' => null,
        'limit' => null,
        'marker' => null,
        'isPublic' => null
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
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称。
    * category  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * limit  返回条数，默认返回100条记录，最多返回1000条记录。
    * marker  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    * isPublic  是否公开私有，true为公开，false为私有。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'name' => 'name',
            'category' => 'category',
            'limit' => 'limit',
            'marker' => 'marker',
            'isPublic' => 'is_public'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称。
    * category  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * limit  返回条数，默认返回100条记录，最多返回1000条记录。
    * marker  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    * isPublic  是否公开私有，true为公开，false为私有。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'name' => 'setName',
            'category' => 'setCategory',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'isPublic' => 'setIsPublic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称。
    * category  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    * limit  返回条数，默认返回100条记录，最多返回1000条记录。
    * marker  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    * isPublic  是否公开私有，true为公开，false为私有。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'name' => 'getName',
            'category' => 'getCategory',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'isPublic' => 'getIsPublic'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets namespace
    *  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets name
    *  镜像仓库名称。
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
    * @param string|null $name 镜像仓库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets category
    *  镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 镜像仓库分类，可设置为app_server, linux, framework_app, database, lang, other, windows, arm。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets limit
    *  返回条数，默认返回100条记录，最多返回1000条记录。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回条数，默认返回100条记录，最多返回1000条记录。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    *
    * @return int|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param int|null $marker 分页查询下一次查询起始标记，接口的返回值nextMarker为下一次查询的起始标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets isPublic
    *  是否公开私有，true为公开，false为私有。
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 是否公开私有，true为公开，false为私有。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
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

