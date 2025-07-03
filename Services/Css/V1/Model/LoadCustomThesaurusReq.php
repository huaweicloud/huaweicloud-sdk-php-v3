<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadCustomThesaurusReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadCustomThesaurusReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * mainObject  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    * stopObject  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * synonymObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * staticMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * staticStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'mainObject' => 'string',
            'stopObject' => 'string',
            'synonymObject' => 'string',
            'staticMainObject' => 'string',
            'staticStopObject' => 'string',
            'extraMainObject' => 'string',
            'extraStopObject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * mainObject  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    * stopObject  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * synonymObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * staticMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * staticStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'mainObject' => null,
        'stopObject' => null,
        'synonymObject' => null,
        'staticMainObject' => null,
        'staticStopObject' => null,
        'extraMainObject' => null,
        'extraStopObject' => null
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
    * bucketName  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * mainObject  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    * stopObject  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * synonymObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * staticMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * staticStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'mainObject' => 'main_object',
            'stopObject' => 'stop_object',
            'synonymObject' => 'synonym_object',
            'staticMainObject' => 'static_main_object',
            'staticStopObject' => 'static_stop_object',
            'extraMainObject' => 'extra_main_object',
            'extraStopObject' => 'extra_stop_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * mainObject  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    * stopObject  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * synonymObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * staticMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * staticStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'mainObject' => 'setMainObject',
            'stopObject' => 'setStopObject',
            'synonymObject' => 'setSynonymObject',
            'staticMainObject' => 'setStaticMainObject',
            'staticStopObject' => 'setStaticStopObject',
            'extraMainObject' => 'setExtraMainObject',
            'extraStopObject' => 'setExtraStopObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * mainObject  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    * stopObject  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * synonymObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    * staticMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * staticStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraMainObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    * extraStopObject  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'mainObject' => 'getMainObject',
            'stopObject' => 'getStopObject',
            'synonymObject' => 'getSynonymObject',
            'staticMainObject' => 'getStaticMainObject',
            'staticStopObject' => 'getStaticStopObject',
            'extraMainObject' => 'getExtraMainObject',
            'extraStopObject' => 'getExtraStopObject'
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['mainObject'] = isset($data['mainObject']) ? $data['mainObject'] : null;
        $this->container['stopObject'] = isset($data['stopObject']) ? $data['stopObject'] : null;
        $this->container['synonymObject'] = isset($data['synonymObject']) ? $data['synonymObject'] : null;
        $this->container['staticMainObject'] = isset($data['staticMainObject']) ? $data['staticMainObject'] : null;
        $this->container['staticStopObject'] = isset($data['staticStopObject']) ? $data['staticStopObject'] : null;
        $this->container['extraMainObject'] = isset($data['extraMainObject']) ? $data['extraMainObject'] : null;
        $this->container['extraStopObject'] = isset($data['extraStopObject']) ? $data['extraStopObject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
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
    * Gets bucketName
    *  词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName 词库文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets mainObject
    *  主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    *
    * @return string|null
    */
    public function getMainObject()
    {
        return $this->container['mainObject'];
    }

    /**
    * Sets mainObject
    *
    * @param string|null $mainObject 主词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。 main_object, stop_object, synonym_object三个参数至少要填写一个。  >一次只能加载一个主词库，不支持同时加载多个主词库。
    *
    * @return $this
    */
    public function setMainObject($mainObject)
    {
        $this->container['mainObject'] = $mainObject;
        return $this;
    }

    /**
    * Gets stopObject
    *  停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    *
    * @return string|null
    */
    public function getStopObject()
    {
        return $this->container['stopObject'];
    }

    /**
    * Sets stopObject
    *
    * @param string|null $stopObject 停词词库文件对象，必须为UTF-8无BOM编码的文本文件，一行一个分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    *
    * @return $this
    */
    public function setStopObject($stopObject)
    {
        $this->container['stopObject'] = $stopObject;
        return $this;
    }

    /**
    * Gets synonymObject
    *  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    *
    * @return string|null
    */
    public function getSynonymObject()
    {
        return $this->container['synonymObject'];
    }

    /**
    * Sets synonymObject
    *
    * @param string|null $synonymObject 同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。  main_object, stop_object, synonym_object三个参数至少要填写一个。
    *
    * @return $this
    */
    public function setSynonymObject($synonymObject)
    {
        $this->container['synonymObject'] = $synonymObject;
        return $this;
    }

    /**
    * Gets staticMainObject
    *  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return string|null
    */
    public function getStaticMainObject()
    {
        return $this->container['staticMainObject'];
    }

    /**
    * Sets staticMainObject
    *
    * @param string|null $staticMainObject 同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return $this
    */
    public function setStaticMainObject($staticMainObject)
    {
        $this->container['staticMainObject'] = $staticMainObject;
        return $this;
    }

    /**
    * Gets staticStopObject
    *  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return string|null
    */
    public function getStaticStopObject()
    {
        return $this->container['staticStopObject'];
    }

    /**
    * Sets staticStopObject
    *
    * @param string|null $staticStopObject 同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return $this
    */
    public function setStaticStopObject($staticStopObject)
    {
        $this->container['staticStopObject'] = $staticStopObject;
        return $this;
    }

    /**
    * Gets extraMainObject
    *  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return string|null
    */
    public function getExtraMainObject()
    {
        return $this->container['extraMainObject'];
    }

    /**
    * Sets extraMainObject
    *
    * @param string|null $extraMainObject 同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return $this
    */
    public function setExtraMainObject($extraMainObject)
    {
        $this->container['extraMainObject'] = $extraMainObject;
        return $this;
    }

    /**
    * Gets extraStopObject
    *  同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return string|null
    */
    public function getExtraStopObject()
    {
        return $this->container['extraStopObject'];
    }

    /**
    * Sets extraStopObject
    *
    * @param string|null $extraStopObject 同义词词库文件，必须为UTF-8无BOM编码的文本文件，一行一组分词，文件大小最大支持100M。
    *
    * @return $this
    */
    public function setExtraStopObject($extraStopObject)
    {
        $this->container['extraStopObject'] = $extraStopObject;
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

